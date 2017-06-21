<?php

use Faker\Factory as Faker;
use App\CorrectiveAction;
use App\Repositories\CorrectiveActionRepository;

trait MakeCorrectiveActionTrait
{
    /**
     * Create fake instance of CorrectiveAction and save it in database
     *
     * @param array $correctiveActionFields
     * @return CorrectiveAction
     */
    public function makeCorrectiveAction($correctiveActionFields = [])
    {
        /** @var CorrectiveActionRepository $correctiveActionRepo */
        $correctiveActionRepo = App::make(CorrectiveActionRepository::class);
        $theme = $this->fakeCorrectiveActionData($correctiveActionFields);
        return $correctiveActionRepo->create($theme);
    }

    /**
     * Get fake instance of CorrectiveAction
     *
     * @param array $correctiveActionFields
     * @return CorrectiveAction
     */
    public function fakeCorrectiveAction($correctiveActionFields = [])
    {
        return new CorrectiveAction($this->fakeCorrectiveActionData($correctiveActionFields));
    }

    /**
     * Get fake data of CorrectiveAction
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCorrectiveActionData($correctiveActionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'discrepant_material_id' => $fake->randomDigitNotNull,
            'description_of_non_conformance' => $fake->text,
            'interim_action' => $fake->text,
            'preventative_action' => $fake->text,
            'root_cause' => $fake->text,
            'verification' => $fake->text,
            'complete' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $correctiveActionFields);
    }
}
