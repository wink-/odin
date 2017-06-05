<?php

namespace App;

use Eloquent as Model;

/**
 * Class Processes
 * @package App\Models
 * @version June 4, 2017, 7:43 pm UTC
 */
class Processes extends Model
{

    public $table = 'sft_processes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'code',
        'name',
        'minimum_lot_charge'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function parts()
    {
         return  $this->belongsToMany(Parts::class, 'process_code', 'code');
    }    
}
