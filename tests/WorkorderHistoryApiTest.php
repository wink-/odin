<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkorderHistoryApiTest extends TestCase
{
    use MakeWorkorderHistoryTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateWorkorderHistory()
    {
        $workorderHistory = $this->fakeWorkorderHistoryData();
        $this->json('POST', '/api/v1/workorderHistories', $workorderHistory);

        $this->assertApiResponse($workorderHistory);
    }

    /**
     * @test
     */
    public function testReadWorkorderHistory()
    {
        $workorderHistory = $this->makeWorkorderHistory();
        $this->json('GET', '/api/v1/workorderHistories/'.$workorderHistory->id);

        $this->assertApiResponse($workorderHistory->toArray());
    }

    /**
     * @test
     */
    public function testUpdateWorkorderHistory()
    {
        $workorderHistory = $this->makeWorkorderHistory();
        $editedWorkorderHistory = $this->fakeWorkorderHistoryData();

        $this->json('PUT', '/api/v1/workorderHistories/'.$workorderHistory->id, $editedWorkorderHistory);

        $this->assertApiResponse($editedWorkorderHistory);
    }

    /**
     * @test
     */
    public function testDeleteWorkorderHistory()
    {
        $workorderHistory = $this->makeWorkorderHistory();
        $this->json('DELETE', '/api/v1/workorderHistories/'.$workorderHistory->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/workorderHistories/'.$workorderHistory->id);

        $this->assertResponseStatus(404);
    }
}
