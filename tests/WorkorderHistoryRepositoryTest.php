<?php

use App\Models\WorkorderHistory;
use App\Repositories\WorkorderHistoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkorderHistoryRepositoryTest extends TestCase
{
    use MakeWorkorderHistoryTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var WorkorderHistoryRepository
     */
    protected $workorderHistoryRepo;

    public function setUp()
    {
        parent::setUp();
        $this->workorderHistoryRepo = App::make(WorkorderHistoryRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateWorkorderHistory()
    {
        $workorderHistory = $this->fakeWorkorderHistoryData();
        $createdWorkorderHistory = $this->workorderHistoryRepo->create($workorderHistory);
        $createdWorkorderHistory = $createdWorkorderHistory->toArray();
        $this->assertArrayHasKey('id', $createdWorkorderHistory);
        $this->assertNotNull($createdWorkorderHistory['id'], 'Created WorkorderHistory must have id specified');
        $this->assertNotNull(WorkorderHistory::find($createdWorkorderHistory['id']), 'WorkorderHistory with given id must be in DB');
        $this->assertModelData($workorderHistory, $createdWorkorderHistory);
    }

    /**
     * @test read
     */
    public function testReadWorkorderHistory()
    {
        $workorderHistory = $this->makeWorkorderHistory();
        $dbWorkorderHistory = $this->workorderHistoryRepo->find($workorderHistory->id);
        $dbWorkorderHistory = $dbWorkorderHistory->toArray();
        $this->assertModelData($workorderHistory->toArray(), $dbWorkorderHistory);
    }

    /**
     * @test update
     */
    public function testUpdateWorkorderHistory()
    {
        $workorderHistory = $this->makeWorkorderHistory();
        $fakeWorkorderHistory = $this->fakeWorkorderHistoryData();
        $updatedWorkorderHistory = $this->workorderHistoryRepo->update($fakeWorkorderHistory, $workorderHistory->id);
        $this->assertModelData($fakeWorkorderHistory, $updatedWorkorderHistory->toArray());
        $dbWorkorderHistory = $this->workorderHistoryRepo->find($workorderHistory->id);
        $this->assertModelData($fakeWorkorderHistory, $dbWorkorderHistory->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteWorkorderHistory()
    {
        $workorderHistory = $this->makeWorkorderHistory();
        $resp = $this->workorderHistoryRepo->delete($workorderHistory->id);
        $this->assertTrue($resp);
        $this->assertNull(WorkorderHistory::find($workorderHistory->id), 'WorkorderHistory should not exist in DB');
    }
}
