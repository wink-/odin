<?php

use App\Models\Parts;
use App\Repositories\PartsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PartsRepositoryTest extends TestCase
{
    use MakePartsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PartsRepository
     */
    protected $partsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->partsRepo = App::make(PartsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateParts()
    {
        $parts = $this->fakePartsData();
        $createdParts = $this->partsRepo->create($parts);
        $createdParts = $createdParts->toArray();
        $this->assertArrayHasKey('id', $createdParts);
        $this->assertNotNull($createdParts['id'], 'Created Parts must have id specified');
        $this->assertNotNull(Parts::find($createdParts['id']), 'Parts with given id must be in DB');
        $this->assertModelData($parts, $createdParts);
    }

    /**
     * @test read
     */
    public function testReadParts()
    {
        $parts = $this->makeParts();
        $dbParts = $this->partsRepo->find($parts->id);
        $dbParts = $dbParts->toArray();
        $this->assertModelData($parts->toArray(), $dbParts);
    }

    /**
     * @test update
     */
    public function testUpdateParts()
    {
        $parts = $this->makeParts();
        $fakeParts = $this->fakePartsData();
        $updatedParts = $this->partsRepo->update($fakeParts, $parts->id);
        $this->assertModelData($fakeParts, $updatedParts->toArray());
        $dbParts = $this->partsRepo->find($parts->id);
        $this->assertModelData($fakeParts, $dbParts->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteParts()
    {
        $parts = $this->makeParts();
        $resp = $this->partsRepo->delete($parts->id);
        $this->assertTrue($resp);
        $this->assertNull(Parts::find($parts->id), 'Parts should not exist in DB');
    }
}
