<?php

namespace App\Repositories;

use App\CorrectiveAction;
use InfyOm\Generator\Common\BaseRepository;

class CorrectiveActionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'discrepant_material_id',
        'description_of_non_conformance',
        'interim_action',
        'preventative_action',
        'root_cause',
        'verification',
        'complete'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CorrectiveAction::class;
    }
}
