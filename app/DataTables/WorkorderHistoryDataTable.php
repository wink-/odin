<?php

namespace App\DataTables;

use App\WorkorderHistory;
use Form;
use Yajra\Datatables\Services\DataTable;

class WorkorderHistoryDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'workorder_histories.datatables_actions')
            ->editColumn('date_received', function($workorderHistories) {
                if ($workorderHistories->date_received) {
                return $workorderHistories->date_received->format('Y-m-d');
                }
            })
            ->editColumn('date_required', function($workorders) {
                if ($workorders->date_required) {
                return $workorders->date_required->format('Y-m-d');
                }
            })
            ->editColumn('date_shipped', function($workorders) {
                if ($workorders->date_shipped) {
                return $workorders->date_shipped->format('Y-m-d');
                }
            })
            ->editColumn('invoice_date', function($workorders) {
                if ($workorders->invoice_date) {
                return $workorders->invoice_date->format('Y-m-d');
                }
            })             
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $workorderHistories = WorkorderHistory::query();

        return $this->applyScopes($workorderHistories);
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
            //'part_id' => ['name' => 'part_id', 'data' => 'part_id'],
            'part_number' => ['name' => 'part_number', 'data' => 'part_number'],
            'process_code' => ['name' => 'process_code', 'data' => 'process_code'],
            //'price' => ['name' => 'price', 'data' => 'price'],
            //'price_code' => ['name' => 'price_code', 'data' => 'price_code'],
            'date_received' => ['name' => 'date_received', 'data' => 'date_received'],
            'date_required' => ['name' => 'date_required', 'data' => 'date_required'],
            'customer_purchase_order' => ['name' => 'customer_purchase_order', 'data' => 'customer_purchase_order'],
            'customer_packing_list' => ['name' => 'customer_packing_list', 'data' => 'customer_packing_list'],
            'quantity' => ['name' => 'quantity', 'data' => 'quantity'],
            //'unit_code' => ['name' => 'unit_code', 'data' => 'unit_code'],
            //'quantity_shipped' => ['name' => 'quantity_shipped', 'data' => 'quantity_shipped'],
            //'our_last_packing_list' => ['name' => 'our_last_packing_list', 'data' => 'our_last_packing_list'],
            //'destination_code' => ['name' => 'destination_code', 'data' => 'destination_code'],
            //'carrier_code' => ['name' => 'carrier_code', 'data' => 'carrier_code'],
            //'freight_code' => ['name' => 'freight_code', 'data' => 'freight_code'],
            'date_shipped' => ['name' => 'date_shipped', 'data' => 'date_shipped'],
            'invoice_number' => ['name' => 'invoice_number', 'data' => 'invoice_number'],
            'invoice_date' => ['name' => 'invoice_date', 'data' => 'invoice_date'],
            'invoice_amount' => ['name' => 'invoice_amount', 'data' => 'invoice_amount'],
            //'priority' => ['name' => 'priority', 'data' => 'priority'],
            'rework' => ['name' => 'rework', 'data' => 'rework'],
            //'invoiced' => ['name' => 'invoiced', 'data' => 'invoiced'],
            //'note' => ['name' => 'note', 'data' => 'note'],
            //'STEPNAME1' => ['name' => 'STEPNAME1', 'data' => 'STEPNAME1'],
            //'TMANHRS1' => ['name' => 'TMANHRS1', 'data' => 'TMANHRS1'],
            //'TOTHOURS1' => ['name' => 'TOTHOURS1', 'data' => 'TOTHOURS1'],
            //'STEPNAME2' => ['name' => 'STEPNAME2', 'data' => 'STEPNAME2'],
            //'TMANHRS2' => ['name' => 'TMANHRS2', 'data' => 'TMANHRS2'],
            //'TOTHOURS2' => ['name' => 'TOTHOURS2', 'data' => 'TOTHOURS2'],
            //'STEPNAME3' => ['name' => 'STEPNAME3', 'data' => 'STEPNAME3'],
            //'TMANHRS3' => ['name' => 'TMANHRS3', 'data' => 'TMANHRS3'],
            //'TOTHOURS3' => ['name' => 'TOTHOURS3', 'data' => 'TOTHOURS3']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'workorderHistories';
    }
}
