<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PartsApiTest extends TestCase
{
    use MakePartsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateParts()
    {
        $parts = $this->fakePartsData();
        $this->json('POST', '/api/v1/parts', $parts);

        $this->assertApiResponse($parts);
    }

    /**
     * @test
     */
    public function testReadParts()
    {
        $parts = $this->makeParts();
        $this->json('GET', '/api/v1/parts/'.$parts->id);

        $this->assertApiResponse($parts->toArray());
    }

    /**
     * @test
     */
    public function testUpdateParts()
    {
        $parts = $this->makeParts();
        $editedParts = $this->fakePartsData();

        $this->json('PUT', '/api/v1/parts/'.$parts->id, $editedParts);

        $this->assertApiResponse($editedParts);
    }

    /**
     * @test
     */
    public function testDeleteParts()
    {
        $parts = $this->makeParts();
        $this->json('DELETE', '/api/v1/parts/'.$parts->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/parts/'.$parts->id);

        $this->assertResponseStatus(404);
    }
}
