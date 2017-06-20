<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Workorders;
use App\WorkorderHistory as History;
use App\Http\Requests;
use App\DataTables\DmrDataTable;
use App\Repositories\DmrRepository;
use App\Http\Requests\CreateDmrRequest;
use App\Http\Requests\UpdateDmrRequest;
use App\Http\Controllers\AppBaseController;

class DmrController extends AppBaseController
{
    /** @var  DmrRepository */
    private $dmrRepository;

    public function __construct(DmrRepository $dmrRepo)
    {
        $this->dmrRepository = $dmrRepo;
    }

    /**
     * Display a listing of the Dmr.
     *
     * @param DmrDataTable $dmrDataTable
     * @return Response
     */
    public function index(DmrDataTable $dmrDataTable)
    {
        return $dmrDataTable->render('dmrs.index');
    }

    /**
     * Show the form for creating a new Dmr.
     *
     * @return Response
     */
    public function create()
    {
        return view('dmrs.create');
    }

    /**
     * Store a newly created Dmr in storage.
     *
     * @param CreateDmrRequest $request
     *
     * @return Response
     */
    public function store(CreateDmrRequest $request)
    {
        $wo = Workorders::find($request->workorder_id);
        if (!$wo) {
            $wo = History::find($request->workorder_id);
        }

        if (!$wo) {
            
            Flash::error('Workorder Not Found');

            return redirect(route('dmrs.create'));

        }

        
        $request->request->add(['customer_code' => $wo->customer_code]);
        $request->request->add(['process_code' => $wo->process_code]);
        $request->request->add(['part_number' => $wo->part_number]);

        // Check to see if the image exists and upload it to the appropriate place
        if ($request->hasFile('image') && $request->image->isValid()) {
            $request->request->add(['image_url' => $request->image->hashName()]);
            $request->image->store('dmr_images', 'public');
        }
        // Check to see if the form exists and upload it to the appropriate place
        if ($request->hasFile('dmr_form') && $request->dmr_form->isValid()) {
            $request->request->add(['form_url' => $request->dmr_form->hashName()]);
            $request->dmr_form->store('dmr_forms', 'public');
        }
        $input = $request->all();


        $dmr = $this->dmrRepository->create($input);

        Flash::success('DMR saved successfully.');

        return redirect(route('dmrs.index'));
    }

    /**
     * Display the specified Dmr.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            Flash::error('DMR not found');

            return redirect(route('dmrs.index'));
        }

        return view('dmrs.show')->with('dmr', $dmr);
    }

    /**
     * Show the form for editing the specified Dmr.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            Flash::error('DMR not found');

            return redirect(route('dmrs.index'));
        }

        return view('dmrs.edit')->with('dmr', $dmr);
    }

    /**
     * Update the specified Dmr in storage.
     *
     * @param  int              $id
     * @param UpdateDmrRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDmrRequest $request)
    {
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            Flash::error('DMR not found');

            return redirect(route('dmrs.index'));
        }

        $wo = Workorders::findOrFail($request->workorder_id);
        
        $request->request->add(['customer_code' => $wo->customer_code]);
        $request->request->add(['process_code' => $wo->process_code]);
        $request->request->add(['part_number' => $wo->part_number]);
        
        if ($request->hasFile('image') && $request->image->isValid()) {
            $request->request->add(['image_url' => $request->image->hashName()]);
            $request->image->store('dmr_images', 'public');
        }
        $dmr = $this->dmrRepository->update($request->all(), $id);

        Flash::success('Dmr updated successfully.');

        return redirect(route('dmrs.index'));
    }

    /**
     * Remove the specified Dmr from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            Flash::error('Dmr not found');

            return redirect(route('dmrs.index'));
        }

        $this->dmrRepository->delete($id);

        Flash::success('Dmr deleted successfully.');

        return redirect(route('dmrs.index'));
    }
}
