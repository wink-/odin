<?php

namespace App\Repositories;

use App\Workorders;
use InfyOm\Generator\Common\BaseRepository;

class WorkordersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
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
        'createdAt',
        'updatedAt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Workorders::class;
    }
}
