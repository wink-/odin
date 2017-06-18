<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DmrApiTest extends TestCase
{
    use MakeDmrTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDmr()
    {
        $dmr = $this->fakeDmrData();
        $this->json('POST', '/api/v1/dmrs', $dmr);

        $this->assertApiResponse($dmr);
    }

    /**
     * @test
     */
    public function testReadDmr()
    {
        $dmr = $this->makeDmr();
        $this->json('GET', '/api/v1/dmrs/'.$dmr->id);

        $this->assertApiResponse($dmr->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDmr()
    {
        $dmr = $this->makeDmr();
        $editedDmr = $this->fakeDmrData();

        $this->json('PUT', '/api/v1/dmrs/'.$dmr->id, $editedDmr);

        $this->assertApiResponse($editedDmr);
    }

    /**
     * @test
     */
    public function testDeleteDmr()
    {
        $dmr = $this->makeDmr();
        $this->json('DELETE', '/api/v1/dmrs/'.$dmr->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dmrs/'.$dmr->id);

        $this->assertResponseStatus(404);
    }
}
