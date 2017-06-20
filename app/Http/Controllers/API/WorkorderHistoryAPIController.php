<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWorkorderHistoryAPIRequest;
use App\Http\Requests\API\UpdateWorkorderHistoryAPIRequest;
use App\WorkorderHistory;
use App\Repositories\WorkorderHistoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class WorkorderHistoryController
 * @package App\Http\Controllers\API
 */

class WorkorderHistoryAPIController extends AppBaseController
{
    /** @var  WorkorderHistoryRepository */
    private $workorderHistoryRepository;

    public function __construct(WorkorderHistoryRepository $workorderHistoryRepo)
    {
        $this->workorderHistoryRepository = $workorderHistoryRepo;
    }

    /**
     * Display a listing of the WorkorderHistory.
     * GET|HEAD /workorderHistories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->workorderHistoryRepository->pushCriteria(new RequestCriteria($request));
        $this->workorderHistoryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $workorderHistories = $this->workorderHistoryRepository->all();

        return $this->sendResponse($workorderHistories->toArray(), 'Workorder Histories retrieved successfully');
    }

    /**
     * Store a newly created WorkorderHistory in storage.
     * POST /workorderHistories
     *
     * @param CreateWorkorderHistoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkorderHistoryAPIRequest $request)
    {
        $input = $request->all();

        $workorderHistories = $this->workorderHistoryRepository->create($input);

        return $this->sendResponse($workorderHistories->toArray(), 'Workorder History saved successfully');
    }

    /**
     * Display the specified WorkorderHistory.
     * GET|HEAD /workorderHistories/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var WorkorderHistory $workorderHistory */
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            return $this->sendError('Workorder History not found');
        }

        return $this->sendResponse($workorderHistory->toArray(), 'Workorder History retrieved successfully');
    }

    /**
     * Update the specified WorkorderHistory in storage.
     * PUT/PATCH /workorderHistories/{id}
     *
     * @param  int $id
     * @param UpdateWorkorderHistoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkorderHistoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var WorkorderHistory $workorderHistory */
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            return $this->sendError('Workorder History not found');
        }

        $workorderHistory = $this->workorderHistoryRepository->update($input, $id);

        return $this->sendResponse($workorderHistory->toArray(), 'WorkorderHistory updated successfully');
    }

    /**
     * Remove the specified WorkorderHistory from storage.
     * DELETE /workorderHistories/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var WorkorderHistory $workorderHistory */
        $workorderHistory = $this->workorderHistoryRepository->findWithoutFail($id);

        if (empty($workorderHistory)) {
            return $this->sendError('Workorder History not found');
        }

        $workorderHistory->delete();

        return $this->sendResponse($id, 'Workorder History deleted successfully');
    }
}
