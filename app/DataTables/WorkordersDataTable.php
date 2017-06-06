<?php

namespace App\DataTables;
use Auth;
use Carbon;
use App\Workorders;
use Form;
use Yajra\Datatables\Services\DataTable;

class WorkordersDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
           return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'workorders.datatables_actions')
            ->editColumn('date_received', '{!! $date_received!!}')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $workorders = Workorders::query();

        return $this->applyScopes($workorders);
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
            'customer_code' => ['name' => 'customer_code', 'data' => 'customer_code'],
            'part_number' => ['name' => 'part_number', 'data' => 'part_number'],
            'process_code' => ['name' => 'process_code', 'data' => 'process_code'],
            'quantity' => ['name' => 'quantity', 'data' => 'quantity'],
            'unit_code' => ['name' => 'unit_code', 'data' => 'unit_code'],
            'price' => ['name' => 'price', 'data' => 'price'],
            'date_received' => ['name' => 'date_received', 'data' => 'date_received'],
            'date_required' => ['name' => 'date_required', 'data' => 'date_required'],
            'customer_purchase_order' => ['name' => 'customer_purchase_order', 'data' => 'customer_purchase_order'],
            'customer_packing_list' => ['name' => 'customer_packing_list', 'data' => 'customer_packing_list'],
            'quantity_shipped' => ['name' => 'quantity_shipped', 'data' => 'quantity_shipped'],
            'date_shipped' => ['name' => 'date_shipped', 'data' => 'date_shipped'],
            'rework' => ['name' => 'rework', 'data' => 'rework'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'workorders';
    }
}
