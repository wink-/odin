<?php

namespace App\Http\Controllers;

use App\DataTables\WorkorderHistoryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateWorkorderHistoryRequest;
use App\Http\Requests\UpdateWorkorderHistoryRequest;
use App\Repositories\WorkorderHistoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class WorkorderHistoryController extends AppBaseController
{
    /** @var  WorkorderHistoryRepository */
    private $workorderHistoryRepository;

    public function __construct(WorkorderHistoryRepository $workorderHistoryRepo)
    {
        $this->workorderHistoryRepository = $workorderHistoryRepo;
    }

    /**
     * Display a listing of the WorkorderHistory.
     *
     * @param WorkorderHistoryDataTable $workorderHistoryDataTable
     * @return Response
     */
    public function index(WorkorderHistoryDataTable $workorderHistoryDataTable)
    {
        return $workorderHistoryDataTable->render('workorder_histories.index');
    }

    /**
     * Show the form for creating a new WorkorderHistory.
     *
     * @return Response
     */
    public function create()
    {
        return view('workorder_histories.create');
    }

    /**
     * Store a newly created WorkorderHistory in storage.
     *
     * @param CreateWorkorderHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkorderHistoryRequest $request)
    {
        $input = $request->all();

        $workorderHistory = $this->workorderHistoryRepository->create($input);

        Flash::success('Workorder History saved successfully.');

        return redirect(route('workorderHistories.index'));
    }

    /**
     * Display the specified WorkorderHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            Flash::error('Workorder History not found');

            return redirect(route('workorderHistories.index'));
        }

        return view('workorder_histories.show')->with('workorderHistory', $workorderHistory);
    }

    /**
     * Show the form for editing the specified WorkorderHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            Flash::error('Workorder History not found');

            return redirect(route('workorderHistories.index'));
        }

        return view('workorder_histories.edit')->with('workorderHistory', $workorderHistory);
    }

    /**
     * Update the specified WorkorderHistory in storage.
     *
     * @param  int              $id
     * @param UpdateWorkorderHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkorderHistoryRequest $request)
    {
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            Flash::error('Workorder History not found');

            return redirect(route('workorderHistories.index'));
        }

        $workorderHistory = $this->workorderHistoryRepository->update($request->all(), $id);

        Flash::success('Workorder History updated successfully.');

        return redirect(route('workorderHistories.index'));
    }

    /**
     * Remove the specified WorkorderHistory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            Flash::error('Workorder History not found');

            return redirect(route('workorderHistories.index'));
        }

        $this->workorderHistoryRepository->delete($id);

        Flash::success('Workorder History deleted successfully.');

        return redirect(route('workorderHistories.index'));
    }
}
