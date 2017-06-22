<?php

namespace App;

use Eloquent as Model;

/**
 * Class CorrectiveAction
 * @package App
 * @version June 20, 2017, 2:07 am UTC
 */
class CorrectiveAction extends Model
{

    public $table = 'pluto_corrective_actions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'discrepant_material_id',
        'description_of_non_conformance',
        'containment',
        'interim_action',
        'preventative_action',
        'root_cause',
        'verification',
        'complete'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'discrepant_material_id' => 'integer',
        'description_of_non_conformance' => 'string',
        'containment' => 'string',
        'interim_action' => 'string',
        'preventative_action' => 'string',
        'root_cause' => 'string',
        'verification' => 'string',
        'complete' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function discrepantMaterial()
    {
        return $this->belongsTo(\App\DiscrepantMaterial::class);
    }
}
