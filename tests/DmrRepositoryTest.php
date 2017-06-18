<?php

use App\Models\Dmr;
use App\Repositories\DmrRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DmrRepositoryTest extends TestCase
{
    use MakeDmrTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DmrRepository
     */
    protected $dmrRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dmrRepo = App::make(DmrRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDmr()
    {
        $dmr = $this->fakeDmrData();
        $createdDmr = $this->dmrRepo->create($dmr);
        $createdDmr = $createdDmr->toArray();
        $this->assertArrayHasKey('id', $createdDmr);
        $this->assertNotNull($createdDmr['id'], 'Created Dmr must have id specified');
        $this->assertNotNull(Dmr::find($createdDmr['id']), 'Dmr with given id must be in DB');
        $this->assertModelData($dmr, $createdDmr);
    }

    /**
     * @test read
     */
    public function testReadDmr()
    {
        $dmr = $this->makeDmr();
        $dbDmr = $this->dmrRepo->find($dmr->id);
        $dbDmr = $dbDmr->toArray();
        $this->assertModelData($dmr->toArray(), $dbDmr);
    }

    /**
     * @test update
     */
    public function testUpdateDmr()
    {
        $dmr = $this->makeDmr();
        $fakeDmr = $this->fakeDmrData();
        $updatedDmr = $this->dmrRepo->update($fakeDmr, $dmr->id);
        $this->assertModelData($fakeDmr, $updatedDmr->toArray());
        $dbDmr = $this->dmrRepo->find($dmr->id);
        $this->assertModelData($fakeDmr, $dbDmr->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDmr()
    {
        $dmr = $this->makeDmr();
        $resp = $this->dmrRepo->delete($dmr->id);
        $this->assertTrue($resp);
        $this->assertNull(Dmr::find($dmr->id), 'Dmr should not exist in DB');
    }
}
