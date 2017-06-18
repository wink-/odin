<?php

use Faker\Factory as Faker;
use App\Dmr;
use App\Repositories\DmrRepository;

trait MakeDmrTrait
{
    /**
     * Create fake instance of Dmr and save it in database
     *
     * @param array $dmrFields
     * @return Dmr
     */
    public function makeDmr($dmrFields = [])
    {
        /** @var DmrRepository $dmrRepo */
        $dmrRepo = App::make(DmrRepository::class);
        $theme = $this->fakeDmrData($dmrFields);
        return $dmrRepo->create($theme);
    }

    /**
     * Get fake instance of Dmr
     *
     * @param array $dmrFields
     * @return Dmr
     */
    public function fakeDmr($dmrFields = [])
    {
        return new Dmr($this->fakeDmrData($dmrFields));
    }

    /**
     * Get fake data of Dmr
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDmrData($dmrFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'workorder_id' => $fake->randomDigitNotNull,
            'customer_code' => $fake->word,
            'process_code' => $fake->word,
            'quantity_rejected' => $fake->randomDigitNotNull,
            'reason_for_rejection' => $fake->text,
            'rejection_date' => $fake->word,
            'rejection_type' => $fake->word,
            'corrective_action_due_date' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $dmrFields);
    }
}
