<?php

namespace App\DataTables;

use App\Parts;
use Form;
use Yajra\Datatables\Services\DataTable;

class PartsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'parts.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $parts = Parts::query();

        return $this->applyScopes($parts);
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
        return [
            'number' => ['name' => 'number', 'data' => 'number'],
            'description' => ['name' => 'description', 'data' => 'description'],
            'customer_code' => ['name' => 'customer_code', 'data' => 'customer_code'],
            'process_code' => ['name' => 'process_code', 'data' => 'process_code'],
            'method_code' => ['name' => 'method_code', 'data' => 'method_code'],
            'price' => ['name' => 'price', 'data' => 'price'],
            'specification' => ['name' => 'specification', 'data' => 'specification']

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'parts';
    }
}
