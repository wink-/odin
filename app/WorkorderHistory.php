<?php

namespace App;

use Eloquent as Model;

/**
 * Class WorkorderHistory
 * @package App
 * @version June 18, 2017, 3:50 am UTC
 */
class WorkorderHistory extends Model
{

    public $table = 'sft_work_orders_history';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $primaryKey = 'number';


    public $fillable = [
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

    protected $dates = ['date_received','date_required', 'date_shipped', 'invoice_date'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
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
        'note' => 'string',
        'STEPNAME1' => 'string',
        'STEPNAME2' => 'string',
        'STEPNAME3' => 'string',
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
