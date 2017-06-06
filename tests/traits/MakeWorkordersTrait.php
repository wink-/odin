<?php

use Faker\Factory as Faker;
use App\Workorders;
use App\Repositories\WorkordersRepository;

trait MakeWorkordersTrait
{
    /**
     * Create fake instance of Workorders and save it in database
     *
     * @param array $workordersFields
     * @return Workorders
     */
    public function makeWorkorders($workordersFields = [])
    {
        /** @var WorkordersRepository $workordersRepo */
        $workordersRepo = App::make(WorkordersRepository::class);
        $theme = $this->fakeWorkordersData($workordersFields);
        return $workordersRepo->create($theme);
    }

    /**
     * Get fake instance of Workorders
     *
     * @param array $workordersFields
     * @return Workorders
     */
    public function fakeWorkorders($workordersFields = [])
    {
        return new Workorders($this->fakeWorkordersData($workordersFields));
    }

    /**
     * Get fake data of Workorders
     *
     * @param array $postFields
     * @return array
     */
    public function fakeWorkordersData($workordersFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id' => $fake->randomDigitNotNull,
            'customer_code' => $fake->word,
            'part_id' => $fake->randomDigitNotNull,
            'part_number' => $fake->word,
            'process_code' => $fake->word,
            'price' => $fake->word,
            'price_code' => $fake->word,
            'date_received' => $fake->date('Y-m-d H:i:s'),
            'date_required' => $fake->date('Y-m-d H:i:s'),
            'customer_purchase_order' => $fake->word,
            'customer_packing_list' => $fake->word,
            'quantity' => $fake->word,
            'unit_code' => $fake->word,
            'quantity_shipped' => $fake->word,
            'our_last_packing_list' => $fake->randomDigitNotNull,
            'destination_code' => $fake->word,
            'carrier_code' => $fake->word,
            'freight_code' => $fake->word,
            'date_shipped' => $fake->date('Y-m-d H:i:s'),
            'invoice_number' => $fake->randomDigitNotNull,
            'invoice_date' => $fake->date('Y-m-d H:i:s'),
            'invoice_amount' => $fake->word,
            'priority' => $fake->randomDigitNotNull,
            'rework' => $fake->word,
            'hot' => $fake->word,
            'started' => $fake->word,
            'completed' => $fake->word,
            'shipped' => $fake->word,
            'cod' => $fake->word,
            'invoiced' => $fake->word,
            'note' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'createdAt' => $fake->date('Y-m-d H:i:s'),
            'updatedAt' => $fake->date('Y-m-d H:i:s')
        ], $workordersFields);
    }
}
