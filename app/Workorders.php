<?php

namespace App;

use Eloquent as Model;

/**
 * Class Workorders
 * @package App
 * @version June 6, 2017, 2:37 am UTC
 */
class Workorders extends Model
{

    public $table = 'sft_work_orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $primaryKey = 'number';


    public $fillable = [
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
    ];
    protected $dates = ['date_received', 'date_required', 'date_shipped'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'integer',
        'customer_code' => 'string',
        'part_id' => 'integer',
        'part_number' => 'string',
        'process_code' => 'string',
        'price_code' => 'string',
        'customer_purchase_order' => 'string',
        'customer_packing_list' => 'string',
        'unit_code' => 'string',
        'our_last_packing_list' => 'integer',
        'destination_code' => 'string',
        'carrier_code' => 'string',
        'freight_code' => 'string',
        'invoice_number' => 'integer',
        'priority' => 'integer',
        'rework' => 'boolean',
        'hot' => 'boolean',
        'started' => 'boolean',
        'completed' => 'boolean',
        'shipped' => 'boolean',
        'cod' => 'boolean',
        'invoiced' => 'boolean',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
