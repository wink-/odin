<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePartsAPIRequest;
use App\Http\Requests\API\UpdatePartsAPIRequest;
use App\Parts;
use App\Repositories\PartsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PartsController
 * @package App\Http\Controllers\API
 */

class PartsAPIController extends AppBaseController
{
    /** @var  PartsRepository */
    private $partsRepository;

    public function __construct(PartsRepository $partsRepo)
    {
        $this->partsRepository = $partsRepo;
    }

    /**
     * Display a listing of the Parts.
     * GET|HEAD /parts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->partsRepository->pushCriteria(new RequestCriteria($request));
        $this->partsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $parts = $this->partsRepository->all();

        return $this->sendResponse($parts->toArray(), 'Parts retrieved successfully');
    }

    /**
     * Store a newly created Parts in storage.
     * POST /parts
     *
     * @param CreatePartsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePartsAPIRequest $request)
    {
        $input = $request->all();

        $parts = $this->partsRepository->create($input);

        return $this->sendResponse($parts->toArray(), 'Parts saved successfully');
    }

    /**
     * Display the specified Parts.
     * GET|HEAD /parts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Parts $parts */
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            return $this->sendError('Parts not found');
        }

        return $this->sendResponse($parts->toArray(), 'Parts retrieved successfully');
    }

    /**
     * Update the specified Parts in storage.
     * PUT/PATCH /parts/{id}
     *
     * @param  int $id
     * @param UpdatePartsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePartsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Parts $parts */
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            return $this->sendError('Parts not found');
        }

        $parts = $this->partsRepository->update($input, $id);

        return $this->sendResponse($parts->toArray(), 'Parts updated successfully');
    }

    /**
     * Remove the specified Parts from storage.
     * DELETE /parts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Parts $parts */
        $parts = $this->partsRepository->findWithoutFail($id);

        if (empty($parts)) {
            return $this->sendError('Parts not found');
        }

        $parts->delete();

        return $this->sendResponse($id, 'Parts deleted successfully');
    }
}
