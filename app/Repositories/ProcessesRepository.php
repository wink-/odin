<?php

namespace App\Repositories;

use App\Models\Processes;
use InfyOm\Generator\Common\BaseRepository;

class ProcessesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name',
        'minimum_lot_charge',
        'id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Processes::class;
    }
}
