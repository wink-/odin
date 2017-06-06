<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkordersApiTest extends TestCase
{
    use MakeWorkordersTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateWorkorders()
    {
        $workorders = $this->fakeWorkordersData();
        $this->json('POST', '/api/v1/workorders', $workorders);

        $this->assertApiResponse($workorders);
    }

    /**
     * @test
     */
    public function testReadWorkorders()
    {
        $workorders = $this->makeWorkorders();
        $this->json('GET', '/api/v1/workorders/'.$workorders->id);

        $this->assertApiResponse($workorders->toArray());
    }

    /**
     * @test
     */
    public function testUpdateWorkorders()
    {
        $workorders = $this->makeWorkorders();
        $editedWorkorders = $this->fakeWorkordersData();

        $this->json('PUT', '/api/v1/workorders/'.$workorders->id, $editedWorkorders);

        $this->assertApiResponse($editedWorkorders);
    }

    /**
     * @test
     */
    public function testDeleteWorkorders()
    {
        $workorders = $this->makeWorkorders();
        $this->json('DELETE', '/api/v1/workorders/'.$workorders->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/workorders/'.$workorders->id);

        $this->assertResponseStatus(404);
    }
}
