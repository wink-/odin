<?php

namespace App\DataTables;

use App\Dmr;
use Form;
use Yajra\Datatables\Services\DataTable;

class DmrDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'dmrs.datatables_actions')
            ->editColumn('corrective_action_due_date', function($dmr) {
                if ($dmr->corrective_action_due_date) {
                return $dmr->corrective_action_due_date->format('Y-m-d');
                }
            })
            ->editColumn('rejection_date', function($dmr) {
                if ($dmr->rejection_date) {
                return $dmr->rejection_date->format('Y-m-d');
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
        $dmrs = Dmr::query();

        return $this->applyScopes($dmrs);
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
            'workorder_id' => ['name' => 'workorder_id', 'data' => 'workorder_id'],
            'customer_code' => ['name' => 'customer_code', 'data' => 'customer_code'],
            'process_code' => ['name' => 'process_code', 'data' => 'process_code'],
            'quantity_rejected' => ['name' => 'quantity_rejected', 'data' => 'quantity_rejected'],
            //'reason_for_rejection' => ['name' => 'reason_for_rejection', 'data' => 'reason_for_rejection'],
            'rejection_date' => ['name' => 'rejection_date', 'data' => 'rejection_date'],
            'rejection_type' => ['name' => 'rejection_type', 'data' => 'rejection_type'],
            'corrective_action_due_date' => ['name' => 'corrective_action_due_date', 'data' => 'corrective_action_due_date']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'dmrs';
    }
}
