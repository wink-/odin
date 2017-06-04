<?php

namespace App\Http\Controllers;
use Flash;
use Response;
use App\Http\Requests;
use App\DataTables\ProcessesDataTable;
use App\Http\Requests\CreateProcessesRequest;
use App\Http\Requests\UpdateProcessesRequest;
use App\Repositories\ProcessesRepository;
use App\Http\Controllers\AppBaseController;


class ProcessesController extends Controller
{
    /** @var  ProcessesRepository */
    private $processesRepository;

    public function __construct(ProcessesRepository $processesRepo)
    {
        $this->processesRepository = $processesRepo;
    }

    /**
     * Display a listing of the Processes.
     *
     * @param ProcessesDataTable $processesDataTable
     * @return Response
     */
    public function index(ProcessesDataTable $processesDataTable)
    {
        return $processesDataTable->render('processes.index');
    }

    /**
     * Show the form for creating a new Processes.
     *
     * @return Response
     */
    public function create()
    {
        return view('processes.create');
    }

    /**
     * Store a newly created Processes in storage.
     *
     * @param CreateProcessesRequest $request
     *
     * @return Response
     */
    public function store(CreateProcessesRequest $request)
    {
        $input = $request->all();

        $processes = $this->processesRepository->create($input);

        Flash::success('Processes saved successfully.');

        return redirect(route('processes.index'));
    }

    /**
     * Display the specified Processes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $processes = $this->processesRepository->findWithoutFail($id);

        if (empty($processes)) {
            Flash::error('Processes not found');

            return redirect(route('processes.index'));
        }

        return view('processes.show')->with('processes', $processes);
    }

    /**
     * Show the form for editing the specified Processes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $processes = $this->processesRepository->findWithoutFail($id);

        if (empty($processes)) {
            Flash::error('Processes not found');

            return redirect(route('processes.index'));
        }

        return view('processes.edit')->with('processes', $processes);
    }

    /**
     * Update the specified Processes in storage.
     *
     * @param  int              $id
     * @param UpdateProcessesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcessesRequest $request)
    {
        $processes = $this->processesRepository->findWithoutFail($id);

        if (empty($processes)) {
            Flash::error('Processes not found');

            return redirect(route('processes.index'));
        }

        $processes = $this->processesRepository->update($request->all(), $id);

        Flash::success('Processes updated successfully.');

        return redirect(route('processes.index'));
    }

    /**
     * Remove the specified Processes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $processes = $this->processesRepository->findWithoutFail($id);

        if (empty($processes)) {
            Flash::error('Processes not found');

            return redirect(route('processes.index'));
        }

        $this->processesRepository->delete($id);

        Flash::success('Processes deleted successfully.');

        return redirect(route('processes.index'));
    }
}
