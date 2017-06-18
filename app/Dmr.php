<?php

namespace App;

use Eloquent as Model;

/**
 * Class Dmr
 * @package App
 * @version June 6, 2017, 11:09 pm UTC
 */
class Dmr extends Model
{

    public $table = 'discrepant_material';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'workorder_id',
        'customer_code',
        'process_code',
        'part_number',
        'quantity_rejected',
        'reason_for_rejection',
        'rejection_date',
        'rejection_type',
        'corrective_action_due_date',
        'image_url',
        'form_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'workorder_id' => 'integer',
        'customer_code' => 'string',
        'process_code' => 'string',
        'part_number' => 'string',
        'quantity_rejected' => 'integer',
        'reason_for_rejection' => 'string',
        'rejection_date' => 'date',
        'rejection_type' => 'string',
        'corrective_action_due_date' => 'date',
        'image_url' => 'string',
        'form_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    'workorder_id' => 'bail|required|numeric',
    'image' => 'nullable|image'
        
    ];

    
}
