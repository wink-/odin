<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customers
 * @package App\Models
 * @version May 31, 2017, 3:36 am UTC
 */
class Customers extends Model
{
    use SoftDeletes;

    public $table = 'sft_customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $connection = 'wipsys';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


    public $fillable = [
        'code',
        'name',
        'physical_address',
        'address_extension',
        'billing_address',
        'city',
        'state',
        'zip',
        'ship_to_address_id',
        'ship_to_address_code',
        'destination_code',
        'carrier_id',
        'carrier_code',
        'CONTACT1',
        'company_phone',
        'EXTENSION1',
        'CONTACT2',
        'PHONE2',
        'EXTENSION2',
        'fax',
        'email',
        'cod',
        'tax_id',
        'note',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'name' => 'string',
        'physical_address' => 'string',
        'address_extension' => 'string',
        'billing_address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'ship_to_address_id' => 'integer',
        'ship_to_address_code' => 'string',
        'destination_code' => 'string',
        'carrier_id' => 'integer',
        'carrier_code' => 'string',
        'CONTACT1' => 'string',
        'company_phone' => 'string',
        'EXTENSION1' => 'string',
        'CONTACT2' => 'string',
        'PHONE2' => 'string',
        'EXTENSION2' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'cod' => 'boolean',
        'tax_id' => 'string',
        'note' => 'string',
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
