<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDmrAPIRequest;
use App\Http\Requests\API\UpdateDmrAPIRequest;
use App\Dmr;
use App\Repositories\DmrRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DmrController
 * @package App\Http\Controllers\API
 */

class DmrAPIController extends AppBaseController
{
    /** @var  DmrRepository */
    private $dmrRepository;

    public function __construct(DmrRepository $dmrRepo)
    {
        $this->dmrRepository = $dmrRepo;
    }

    /**
     * Display a listing of the Dmr.
     * GET|HEAD /dmrs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dmrRepository->pushCriteria(new RequestCriteria($request));
        $this->dmrRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dmrs = $this->dmrRepository->all();

        return $this->sendResponse($dmrs->toArray(), 'Dmrs retrieved successfully');
    }

    /**
     * Store a newly created Dmr in storage.
     * POST /dmrs
     *
     * @param CreateDmrAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDmrAPIRequest $request)
    {
        $input = $request->all();

        $dmrs = $this->dmrRepository->create($input);

        return $this->sendResponse($dmrs->toArray(), 'Dmr saved successfully');
    }

    /**
     * Display the specified Dmr.
     * GET|HEAD /dmrs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Dmr $dmr */
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            return $this->sendError('Dmr not found');
        }

        return $this->sendResponse($dmr->toArray(), 'Dmr retrieved successfully');
    }

    /**
     * Update the specified Dmr in storage.
     * PUT/PATCH /dmrs/{id}
     *
     * @param  int $id
     * @param UpdateDmrAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDmrAPIRequest $request)
    {
        $input = $request->all();

        /** @var Dmr $dmr */
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            return $this->sendError('Dmr not found');
        }

        $dmr = $this->dmrRepository->update($input, $id);

        return $this->sendResponse($dmr->toArray(), 'Dmr updated successfully');
    }

    /**
     * Remove the specified Dmr from storage.
     * DELETE /dmrs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Dmr $dmr */
        $dmr = $this->dmrRepository->findWithoutFail($id);

        if (empty($dmr)) {
            return $this->sendError('Dmr not found');
        }

        $dmr->delete();

        return $this->sendResponse($id, 'Dmr deleted successfully');
    }
}
