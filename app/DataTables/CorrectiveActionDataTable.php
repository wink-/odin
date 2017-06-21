<?php

namespace App\DataTables;

use App\CorrectiveAction;
use Form;
use Yajra\Datatables\Services\DataTable;

class CorrectiveActionDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'corrective_actions.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $correctiveActions = CorrectiveAction::query();

        return $this->applyScopes($correctiveActions);
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
            'discrepant_material_id' => ['name' => 'discrepant_material_id', 'data' => 'discrepant_material_id'],
            'description_of_non_conformance' => ['name' => 'description_of_non_conformance', 'data' => 'description_of_non_conformance'],
            'containment' => ['name' => 'containment', 'data' => 'containment'],
            'interim_action' => ['name' => 'interim_action', 'data' => 'interim_action'],
            'preventative_action' => ['name' => 'preventative_action', 'data' => 'preventative_action'],
            'root_cause' => ['name' => 'root_cause', 'data' => 'root_cause'],
            'verification' => ['name' => 'verification', 'data' => 'verification'],
            'complete' => ['name' => 'complete', 'data' => 'complete']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'correctiveActions';
    }
}
