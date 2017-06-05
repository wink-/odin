<?php

use Faker\Factory as Faker;
use App\Parts;
use App\Repositories\PartsRepository;

trait MakePartsTrait
{
    /**
     * Create fake instance of Parts and save it in database
     *
     * @param array $partsFields
     * @return Parts
     */
    public function makeParts($partsFields = [])
    {
        /** @var PartsRepository $partsRepo */
        $partsRepo = App::make(PartsRepository::class);
        $theme = $this->fakePartsData($partsFields);
        return $partsRepo->create($theme);
    }

    /**
     * Get fake instance of Parts
     *
     * @param array $partsFields
     * @return Parts
     */
    public function fakeParts($partsFields = [])
    {
        return new Parts($this->fakePartsData($partsFields));
    }

    /**
     * Get fake data of Parts
     *
     * @param array $postFields
     * @return array
     */
    public function fakePartsData($partsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'number' => $fake->word,
            'description' => $fake->word,
            'customer_code' => $fake->word,
            'process_code' => $fake->word,
            'method_code' => $fake->word,
            'price' => $fake->word,
            'price_code' => $fake->word,
            'certify' => $fake->word,
            'specification' => $fake->word,
            'bake' => $fake->word,
            'pre_bake_temperature' => $fake->word,
            'pre_bake_time' => $fake->word,
            'post_bake_temperature' => $fake->word,
            'post_bake_time' => $fake->word,
            'adhesion_bake_temperature' => $fake->word,
            'adhesion_bake_time' => $fake->word,
            'hardness_bake_temperature' => $fake->word,
            'hardness_bake_time' => $fake->word,
            'procedure_code' => $fake->word,
            'material' => $fake->word,
            'material_name' => $fake->word,
            'material_condition' => $fake->word,
            'thickness_minimum' => $fake->word,
            'thickness_maximum' => $fake->word,
            'surface_area' => $fake->word,
            'weight' => $fake->word,
            'length' => $fake->word,
            'width' => $fake->word,
            'height' => $fake->word,
            'material_thickness' => $fake->randomDigitNotNull,
            'special_requirement' => $fake->text,
            'note' => $fake->text,
            'operator_note' => $fake->text,
            'quality_check_1' => $fake->randomDigitNotNull,
            'quality_check_2' => $fake->randomDigitNotNull,
            'quality_check_3' => $fake->randomDigitNotNull,
            'quality_check_4' => $fake->randomDigitNotNull,
            'quality_check_5' => $fake->randomDigitNotNull,
            'quality_check_6' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $partsFields);
    }
}
