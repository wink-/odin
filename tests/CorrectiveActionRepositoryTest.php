<?php

use App\Models\CorrectiveAction;
use App\Repositories\CorrectiveActionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CorrectiveActionRepositoryTest extends TestCase
{
    use MakeCorrectiveActionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var CorrectiveActionRepository
     */
    protected $correctiveActionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->correctiveActionRepo = App::make(CorrectiveActionRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateCorrectiveAction()
    {
        $correctiveAction = $this->fakeCorrectiveActionData();
        $createdCorrectiveAction = $this->correctiveActionRepo->create($correctiveAction);
        $createdCorrectiveAction = $createdCorrectiveAction->toArray();
        $this->assertArrayHasKey('id', $createdCorrectiveAction);
        $this->assertNotNull($createdCorrectiveAction['id'], 'Created CorrectiveAction must have id specified');
        $this->assertNotNull(CorrectiveAction::find($createdCorrectiveAction['id']), 'CorrectiveAction with given id must be in DB');
        $this->assertModelData($correctiveAction, $createdCorrectiveAction);
    }

    /**
     * @test read
     */
    public function testReadCorrectiveAction()
    {
        $correctiveAction = $this->makeCorrectiveAction();
        $dbCorrectiveAction = $this->correctiveActionRepo->find($correctiveAction->id);
        $dbCorrectiveAction = $dbCorrectiveAction->toArray();
        $this->assertModelData($correctiveAction->toArray(), $dbCorrectiveAction);
    }

    /**
     * @test update
     */
    public function testUpdateCorrectiveAction()
    {
        $correctiveAction = $this->makeCorrectiveAction();
        $fakeCorrectiveAction = $this->fakeCorrectiveActionData();
        $updatedCorrectiveAction = $this->correctiveActionRepo->update($fakeCorrectiveAction, $correctiveAction->id);
        $this->assertModelData($fakeCorrectiveAction, $updatedCorrectiveAction->toArray());
        $dbCorrectiveAction = $this->correctiveActionRepo->find($correctiveAction->id);
        $this->assertModelData($fakeCorrectiveAction, $dbCorrectiveAction->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteCorrectiveAction()
    {
        $correctiveAction = $this->makeCorrectiveAction();
        $resp = $this->correctiveActionRepo->delete($correctiveAction->id);
        $this->assertTrue($resp);
        $this->assertNull(CorrectiveAction::find($correctiveAction->id), 'CorrectiveAction should not exist in DB');
    }
}
