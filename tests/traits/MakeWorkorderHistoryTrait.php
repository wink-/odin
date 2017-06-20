<?php

use Faker\Factory as Faker;
use App\WorkorderHistory;
use App\Repositories\WorkorderHistoryRepository;

trait MakeWorkorderHistoryTrait
{
    /**
     * Create fake instance of WorkorderHistory and save it in database
     *
     * @param array $workorderHistoryFields
     * @return WorkorderHistory
     */
    public function makeWorkorderHistory($workorderHistoryFields = [])
    {
        /** @var WorkorderHistoryRepository $workorderHistoryRepo */
        $workorderHistoryRepo = App::make(WorkorderHistoryRepository::class);
        $theme = $this->fakeWorkorderHistoryData($workorderHistoryFields);
        return $workorderHistoryRepo->create($theme);
    }

    /**
     * Get fake instance of WorkorderHistory
     *
     * @param array $workorderHistoryFields
     * @return WorkorderHistory
     */
    public function fakeWorkorderHistory($workorderHistoryFields = [])
    {
        return new WorkorderHistory($this->fakeWorkorderHistoryData($workorderHistoryFields));
    }

    /**
     * Get fake data of WorkorderHistory
     *
     * @param array $postFields
     * @return array
     */
    public function fakeWorkorderHistoryData($workorderHistoryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'number' => $fake->randomDigitNotNull,
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
            'STEPNAME1' => $fake->word,
            'TMANHRS1' => $fake->word,
            'TOTHOURS1' => $fake->word,
            'STEPNAME2' => $fake->word,
            'TMANHRS2' => $fake->word,
            'TOTHOURS2' => $fake->word,
            'STEPNAME3' => $fake->word,
            'TMANHRS3' => $fake->word,
            'TOTHOURS3' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $workorderHistoryFields);
    }
}
