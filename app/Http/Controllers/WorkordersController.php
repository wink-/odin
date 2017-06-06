<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\DataTables\WorkordersDataTable;
use App\Repositories\WorkordersRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateWorkordersRequest;
use App\Http\Requests\UpdateWorkordersRequest;




class WorkordersController extends AppBaseController
{
    /** @var  WorkordersRepository */
    private $workordersRepository;

    public function __construct(WorkordersRepository $workordersRepo)
    {
        $this->workordersRepository = $workordersRepo;
    }

    /**
     * Display a listing of the Workorders.
     *
     * @param WorkordersDataTable $workordersDataTable
     * @return Response
     */
    public function index(WorkordersDataTable $workordersDataTable)
    {
        return $workordersDataTable->render('workorders.index');
    }

    /**
     * Show the form for creating a new Workorders.
     *
     * @return Response
     */
    public function create()
    {
        return view('workorders.create');
    }

    /**
     * Store a newly created Workorders in storage.
     *
     * @param CreateWorkordersRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkordersRequest $request)
    {
        $input = $request->all();

        $workorders = $this->workordersRepository->create($input);

        Flash::success('Workorders saved successfully.');

        return redirect(route('workorders.index'));
    }

    /**
     * Display the specified Workorders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            Flash::error('Workorders not found');

            return redirect(route('workorders.index'));
        }

        return view('workorders.show')->with('workorders', $workorders);
    }

    /**
     * Show the form for editing the specified Workorders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            Flash::error('Workorders not found');

            return redirect(route('workorders.index'));
        }

        return view('workorders.edit')->with('workorders', $workorders);
    }

    /**
     * Update the specified Workorders in storage.
     *
     * @param  int              $id
     * @param UpdateWorkordersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkordersRequest $request)
    {
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            Flash::error('Workorders not found');

            return redirect(route('workorders.index'));
        }

        $workorders = $this->workordersRepository->update($request->all(), $id);

        Flash::success('Workorders updated successfully.');

        return redirect(route('workorders.index'));
    }

    /**
     * Remove the specified Workorders from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workorders = $this->workordersRepository->findWithoutFail($id);

        if (empty($workorders)) {
            Flash::error('Workorders not found');

            return redirect(route('workorders.index'));
        }

        $this->workordersRepository->delete($id);

        Flash::success('Workorders deleted successfully.');

        return redirect(route('workorders.index'));
    }
}
