<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCorrectiveActionAPIRequest;
use App\Http\Requests\API\UpdateCorrectiveActionAPIRequest;
use App\CorrectiveAction;
use App\Repositories\CorrectiveActionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CorrectiveActionController
 * @package App\Http\Controllers\API
 */

class CorrectiveActionAPIController extends AppBaseController
{
    /** @var  CorrectiveActionRepository */
    private $correctiveActionRepository;

    public function __construct(CorrectiveActionRepository $correctiveActionRepo)
    {
        $this->correctiveActionRepository = $correctiveActionRepo;
    }

    /**
     * Display a listing of the CorrectiveAction.
     * GET|HEAD /correctiveActions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->correctiveActionRepository->pushCriteria(new RequestCriteria($request));
        $this->correctiveActionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $correctiveActions = $this->correctiveActionRepository->all();

        return $this->sendResponse($correctiveActions->toArray(), 'Corrective Actions retrieved successfully');
    }

    /**
     * Store a newly created CorrectiveAction in storage.
     * POST /correctiveActions
     *
     * @param CreateCorrectiveActionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCorrectiveActionAPIRequest $request)
    {
        $input = $request->all();

        $correctiveActions = $this->correctiveActionRepository->create($input);

        return $this->sendResponse($correctiveActions->toArray(), 'Corrective Action saved successfully');
    }

    /**
     * Display the specified CorrectiveAction.
     * GET|HEAD /correctiveActions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CorrectiveAction $correctiveAction */
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            return $this->sendError('Corrective Action not found');
        }

        return $this->sendResponse($correctiveAction->toArray(), 'Corrective Action retrieved successfully');
    }

    /**
     * Update the specified CorrectiveAction in storage.
     * PUT/PATCH /correctiveActions/{id}
     *
     * @param  int $id
     * @param UpdateCorrectiveActionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCorrectiveActionAPIRequest $request)
    {
        $input = $request->all();

        /** @var CorrectiveAction $correctiveAction */
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            return $this->sendError('Corrective Action not found');
        }

        $correctiveAction = $this->correctiveActionRepository->update($input, $id);

        return $this->sendResponse($correctiveAction->toArray(), 'CorrectiveAction updated successfully');
    }

    /**
     * Remove the specified CorrectiveAction from storage.
     * DELETE /correctiveActions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CorrectiveAction $correctiveAction */
        $correctiveAction = $this->correctiveActionRepository->findWithoutFail($id);

        if (empty($correctiveAction)) {
            return $this->sendError('Corrective Action not found');
        }

        $correctiveAction->delete();

        return $this->sendResponse($id, 'Corrective Action deleted successfully');
    }
}
