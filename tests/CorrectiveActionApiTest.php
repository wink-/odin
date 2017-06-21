<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CorrectiveActionApiTest extends TestCase
{
    use MakeCorrectiveActionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateCorrectiveAction()
    {
        $correctiveAction = $this->fakeCorrectiveActionData();
        $this->json('POST', '/api/v1/correctiveActions', $correctiveAction);

        $this->assertApiResponse($correctiveAction);
    }

    /**
     * @test
     */
    public function testReadCorrectiveAction()
    {
        $correctiveAction = $this->makeCorrectiveAction();
        $this->json('GET', '/api/v1/correctiveActions/'.$correctiveAction->id);

        $this->assertApiResponse($correctiveAction->toArray());
    }

    /**
     * @test
     */
    public function testUpdateCorrectiveAction()
    {
        $correctiveAction = $this->makeCorrectiveAction();
        $editedCorrectiveAction = $this->fakeCorrectiveActionData();

        $this->json('PUT', '/api/v1/correctiveActions/'.$correctiveAction->id, $editedCorrectiveAction);

        $this->assertApiResponse($editedCorrectiveAction);
    }

    /**
     * @test
     */
    public function testDeleteCorrectiveAction()
    {
        $correctiveAction = $this->makeCorrectiveAction();
        $this->json('DELETE', '/api/v1/correctiveActions/'.$correctiveAction->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/correctiveActions/'.$correctiveAction->id);

        $this->assertResponseStatus(404);
    }
}
