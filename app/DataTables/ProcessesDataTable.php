<?php

namespace App\DataTables;

use Auth;
use Form;
use App\Processes;
use Yajra\Datatables\Services\DataTable;

class ProcessesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'processes.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $processes = Processes::query();

        return $this->applyScopes($processes);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'pageLength' => 20,
                'lengthMenu' => [[20, 50, 100, -1],[20, 50, 100, "All"]],
                'dom' => "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>> <'row'<'col-sm-12'tr>> <'row'<'col-sm-5'i><'col-sm-7'p>>",
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        if (Auth::user()->can('view_money'))
        {
            return [
                'code' => ['name' => 'code', 'data' => 'code'],
                'name' => ['name' => 'name', 'data' => 'name'],
                'minimum_lot_charge' => ['name' => 'minimum_lot_charge', 'data' => 'minimum_lot_charge'],
            ];
        } else {
            return [
                'code' => ['name' => 'code', 'data' => 'code'],
                'name' => ['name' => 'name', 'data' => 'name'],
            ];            
        }
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'processes';
    }
}
