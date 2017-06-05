<?php

namespace App;

use Eloquent as Model;

/**
 * Class Parts
 * @package App
 * @version June 5, 2017, 2:24 am UTC
 */
class Parts extends Model
{

    public $table = 'sft_parts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'number',
        'description',
        'customer_code',
        'process_code',
        'method_code',
        'price',
        'price_code',
        'certify',
        'specification',
        'bake',
        'pre_bake_temperature',
        'pre_bake_time',
        'post_bake_temperature',
        'post_bake_time',
        'adhesion_bake_temperature',
        'adhesion_bake_time',
        'hardness_bake_temperature',
        'hardness_bake_time',
        'procedure_code',
        'material',
        'material_name',
        'material_condition',
        'thickness_minimum',
        'thickness_maximum',
        'surface_area',
        'weight',
        'length',
        'width',
        'height',
        'material_thickness',
        'special_requirement',
        'note',
        'operator_note',
        'quality_check_1',
        'quality_check_2',
        'quality_check_3',
        'quality_check_4',
        'quality_check_5',
        'quality_check_6'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'string',
        'description' => 'string',
        'customer_code' => 'string',
        'process_code' => 'string',
        'method_code' => 'string',
        'price_code' => 'string',
        'certify' => 'boolean',
        'specification' => 'string',
        'bake' => 'boolean',
        'pre_bake_temperature' => 'string',
        'pre_bake_time' => 'string',
        'post_bake_temperature' => 'string',
        'post_bake_time' => 'string',
        'adhesion_bake_temperature' => 'string',
        'adhesion_bake_time' => 'string',
        'hardness_bake_temperature' => 'string',
        'hardness_bake_time' => 'string',
        'procedure_code' => 'string',
        'material' => 'string',
        'material_name' => 'string',
        'material_condition' => 'string',
        'material_thickness' => 'float',
        'special_requirement' => 'string',
        'note' => 'string',
        'operator_note' => 'string',
        'quality_check_1' => 'integer',
        'quality_check_2' => 'integer',
        'quality_check_3' => 'integer',
        'quality_check_4' => 'integer',
        'quality_check_5' => 'integer',
        'quality_check_6' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Relationship
     * Each part belongs to one customer
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers()
    {
        
        return $this->belongsTo(Customers::class, 'customer_code', 'code');
    }

    /**
     * Relationship
     * Each belongs to one process
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
           */
    public function processes()
    {
        
        return $this->belongsTo(Processes::class, 'process_code', 'code');
    }    
}
