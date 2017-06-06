<?php

use App\Models\Workorders;
use App\Repositories\WorkordersRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkordersRepositoryTest extends TestCase
{
    use MakeWorkordersTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var WorkordersRepository
     */
    protected $workordersRepo;

    public function setUp()
    {
        parent::setUp();
        $this->workordersRepo = App::make(WorkordersRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateWorkorders()
    {
        $workorders = $this->fakeWorkordersData();
        $createdWorkorders = $this->workordersRepo->create($workorders);
        $createdWorkorders = $createdWorkorders->toArray();
        $this->assertArrayHasKey('id', $createdWorkorders);
        $this->assertNotNull($createdWorkorders['id'], 'Created Workorders must have id specified');
        $this->assertNotNull(Workorders::find($createdWorkorders['id']), 'Workorders with given id must be in DB');
        $this->assertModelData($workorders, $createdWorkorders);
    }

    /**
     * @test read
     */
    public function testReadWorkorders()
    {
        $workorders = $this->makeWorkorders();
        $dbWorkorders = $this->workordersRepo->find($workorders->id);
        $dbWorkorders = $dbWorkorders->toArray();
        $this->assertModelData($workorders->toArray(), $dbWorkorders);
    }

    /**
     * @test update
     */
    public function testUpdateWorkorders()
    {
        $workorders = $this->makeWorkorders();
        $fakeWorkorders = $this->fakeWorkordersData();
        $updatedWorkorders = $this->workordersRepo->update($fakeWorkorders, $workorders->id);
        $this->assertModelData($fakeWorkorders, $updatedWorkorders->toArray());
        $dbWorkorders = $this->workordersRepo->find($workorders->id);
        $this->assertModelData($fakeWorkorders, $dbWorkorders->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteWorkorders()
    {
        $workorders = $this->makeWorkorders();
        $resp = $this->workordersRepo->delete($workorders->id);
        $this->assertTrue($resp);
        $this->assertNull(Workorders::find($workorders->id), 'Workorders should not exist in DB');
    }
}
