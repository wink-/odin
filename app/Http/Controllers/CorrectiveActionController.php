<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Dmr;
use App\Http\Controllers\AppBaseController;
use App\DataTables\CorrectiveActionDataTable;
use App\Repositories\CorrectiveActionRepository;
use App\Http\Requests\CreateCorrectiveActionRequest;
use App\Http\Requests\UpdateCorrectiveActionRequest;

class CorrectiveActionController extends AppBaseController
{
    /** @var  CorrectiveActionRepository */
    private $correctiveActionRepository;


    public function __construct(CorrectiveActionRepository $correctiveActionRepo)
    {
        $this->correctiveActionRepository = $correctiveActionRepo;
    }

    /**
     * Display a listing of the CorrectiveAction.
     *
     * @param CorrectiveActionDataTable $correctiveActionDataTable
     * @return Response
     */
    public function index(CorrectiveActionDataTable $correctiveActionDataTable)
    {
        return $correctiveActionDataTable->render('corrective_actions.index');
    }

    /**
     * Show the form for creating a new CorrectiveAction.
     *
     * @return Response
     */
    public function create()
    {
        /**
        * Let's not create a CAR off a DMR if there is already a CAR with that DMR_ID
        */
        $dmr = Dmr::all()->sortByDesc('id')->pluck('id')->toArray(); 
        $car = $this->correctiveActionRepository->pluck('discrepant_material_id')->toArray();
        $diff = array_diff($dmr, $car);


         return view('corrective_actions.create')->with('dmrs', $diff);
    }

    /**
     * Store a newly created CorrectiveAction in storage.
     *
     * @param CreateCorrectiveActionRequest $request
     *
     * @return Response
     */
    public function store(CreateCorrectiveActionRequest $request)
    {
        $input = $request->all();

        $correctiveAction = $this->correctiveActionRepository->create($input);

        Flash::success('Corrective Action saved successfully.');

        return redirect(route('correctiveActions.index'));
    }

    /**
     * Display the specified CorrectiveAction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            Flash::error('Corrective Action not found');

            return redirect(route('correctiveActions.index'));
        }

        return view('corrective_actions.show')->with('correctiveAction', $correctiveAction);
    }

    /**
     * Show the form for editing the specified CorrectiveAction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            Flash::error('Corrective Action not found');

            return redirect(route('correctiveActions.index'));
        }
        /**
        * Let's not create a CAR off a DMR if there is already a CAR with that DMR_ID
        */
        $dmr = Dmr::all()->sortByDesc('id')->pluck('id', 'id')->toArray(); 
        $car = $this->correctiveActionRepository->pluck('discrepant_material_id', 'discrepant_material_id')->toArray();
        $diff = array_diff($dmr, $car);
        return view('corrective_actions.edit')->with('correctiveAction', $correctiveAction)->with('dmrs', $diff);
    }

    /**
     * Update the specified CorrectiveAction in storage.
     *
     * @param  int              $id
     * @param UpdateCorrectiveActionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCorrectiveActionRequest $request)
    {
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            Flash::error('Corrective Action not found');

            return redirect(route('correctiveActions.index'));
        }

        $correctiveAction = $this->correctiveActionRepository->update($request->all(), $id);

        Flash::success('Corrective Action updated successfully.');

        return redirect(route('correctiveActions.index'));
    }

    /**
     * Remove the specified CorrectiveAction from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            Flash::error('Corrective Action not found');

            return redirect(route('correctiveActions.index'));
        }

        $this->correctiveActionRepository->delete($id);

        Flash::success('Corrective Action deleted successfully.');

        return redirect(route('correctiveActions.index'));
    }
}
