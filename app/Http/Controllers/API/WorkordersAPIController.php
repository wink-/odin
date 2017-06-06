<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWorkordersAPIRequest;
use App\Http\Requests\API\UpdateWorkordersAPIRequest;
use App\Workorders;
use App\Repositories\WorkordersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class WorkordersController
 * @package App\Http\Controllers\API
 */

class WorkordersAPIController extends AppBaseController
{
    /** @var  WorkordersRepository */
    private $workordersRepository;

    public function __construct(WorkordersRepository $workordersRepo)
    {
        $this->workordersRepository = $workordersRepo;
    }

    /**
     * Display a listing of the Workorders.
     * GET|HEAD /workorders
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->workordersRepository->pushCriteria(new RequestCriteria($request));
        $this->workordersRepository->pushCriteria(new LimitOffsetCriteria($request));
        $workorders = $this->workordersRepository->all();

        return $this->sendResponse($workorders->toArray(), 'Workorders retrieved successfully');
    }

    /**
     * Store a newly created Workorders in storage.
     * POST /workorders
     *
     * @param CreateWorkordersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkordersAPIRequest $request)
    {
        $input = $request->all();

        $workorders = $this->workordersRepository->create($input);

        return $this->sendResponse($workorders->toArray(), 'Workorders saved successfully');
    }

    /**
     * Display the specified Workorders.
     * GET|HEAD /workorders/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Workorders $workorders */
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            return $this->sendError('Workorders not found');
        }

        return $this->sendResponse($workorders->toArray(), 'Workorders retrieved successfully');
    }

    /**
     * Update the specified Workorders in storage.
     * PUT/PATCH /workorders/{id}
     *
     * @param  int $id
     * @param UpdateWorkordersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkordersAPIRequest $request)
    {
        $input = $request->all();

        /** @var Workorders $workorders */
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            return $this->sendError('Workorders not found');
        }

        $workorders = $this->workordersRepository->update($input, $id);

        return $this->sendResponse($workorders->toArray(), 'Workorders updated successfully');
    }

    /**
     * Remove the specified Workorders from storage.
     * DELETE /workorders/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Workorders $workorders */
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            return $this->sendError('Workorders not found');
        }

        $workorders->delete();

        return $this->sendResponse($id, 'Workorders deleted successfully');
    }
}
