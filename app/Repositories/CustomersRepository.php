<?php

namespace App\Repositories;

use App\Models\Customers;
use InfyOm\Generator\Common\BaseRepository;

class CustomersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'id',
        'createdAt',
        'updatedAt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customers::class;
    }
}
