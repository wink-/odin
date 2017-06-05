<?php

namespace App\Http\Controllers;

use App\DataTables\PartsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePartsRequest;
use App\Http\Requests\UpdatePartsRequest;
use App\Repositories\PartsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PartsController extends AppBaseController
{
    /** @var  PartsRepository */
    private $partsRepository;

    public function __construct(PartsRepository $partsRepo)
    {
        $this->partsRepository = $partsRepo;
    }

    /**
     * Display a listing of the Parts.
     *
     * @param PartsDataTable $partsDataTable
     * @return Response
     */
    public function index(PartsDataTable $partsDataTable)
    {
        return $partsDataTable->render('parts.index');
    }

    /**
     * Show the form for creating a new Parts.
     *
     * @return Response
     */
    public function create()
    {
        return view('parts.create');
    }

    /**
     * Store a newly created Parts in storage.
     *
     * @param CreatePartsRequest $request
     *
     * @return Response
     */
    public function store(CreatePartsRequest $request)
    {
        $input = $request->all();

        $parts = $this->partsRepository->create($input);

        Flash::success('Parts saved successfully.');

        return redirect(route('parts.index'));
    }

    /**
     * Display the specified Parts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            Flash::error('Parts not found');

            return redirect(route('parts.index'));
        }

        return view('parts.show')->with('parts', $parts);
    }

    /**
     * Show the form for editing the specified Parts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            Flash::error('Parts not found');

            return redirect(route('parts.index'));
        }

        return view('parts.edit')->with('parts', $parts);
    }

    /**
     * Update the specified Parts in storage.
     *
     * @param  int              $id
     * @param UpdatePartsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePartsRequest $request)
    {
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            Flash::error('Parts not found');

            return redirect(route('parts.index'));
        }

        $parts = $this->partsRepository->update($request->all(), $id);

        Flash::success('Parts updated successfully.');

        return redirect(route('parts.index'));
    }

    /**
     * Remove the specified Parts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            Flash::error('Parts not found');

            return redirect(route('parts.index'));
        }

        $this->partsRepository->delete($id);

        Flash::success('Parts deleted successfully.');

        return redirect(route('parts.index'));
    }
}
