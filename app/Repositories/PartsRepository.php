<?php

namespace App\Repositories;

use App\Parts;
use InfyOm\Generator\Common\BaseRepository;

class PartsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Parts::class;
    }
}
