<?php

namespace App\Repositories;

use App\Dmr;
use InfyOm\Generator\Common\BaseRepository;

class DmrRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'workorder_id',
        'customer_code',
        'process_code',
        'quantity_rejected',
        'reason_for_rejection',
        'rejection_date',
        'rejection_type',
        'corrective_action_due_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dmr::class;
    }
}
