<?php

namespace App\Repositories;

use App\WorkorderHistory;
use InfyOm\Generator\Common\BaseRepository;

class WorkorderHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'customer_code',
        'part_id',
        'part_number',
        'process_code',
        'price',
        'price_code',
        'date_received',
        'date_required',
        'customer_purchase_order',
        'customer_packing_list',
        'quantity',
        'unit_code',
        'quantity_shipped',
        'our_last_packing_list',
        'destination_code',
        'carrier_code',
        'freight_code',
        'date_shipped',
        'invoice_number',
        'invoice_date',
        'invoice_amount',
        'priority',
        'rework',
        'hot',
        'started',
        'completed',
        'shipped',
        'cod',
        'invoiced',
        'note',
        'STEPNAME1',
        'TMANHRS1',
        'TOTHOURS1',
        'STEPNAME2',
        'TMANHRS2',
        'TOTHOURS2',
        'STEPNAME3',
        'TMANHRS3',
        'TOTHOURS3'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WorkorderHistory::class;
    }
}
