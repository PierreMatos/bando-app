<?php namespace Tests\Repositories;

use App\Models\Criatura;
use App\Repositories\CriaturaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CriaturaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CriaturaRepository
     */
    protected $criaturaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->criaturaRepo = \App::make(CriaturaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_criatura()
    {
        $criatura = Criatura::factory()->make()->toArray();

        $createdCriatura = $this->criaturaRepo->create($criatura);

        $createdCriatura = $createdCriatura->toArray();
        $this->assertArrayHasKey('id', $createdCriatura);
        $this->assertNotNull($createdCriatura['id'], 'Created Criatura must have id specified');
        $this->assertNotNull(Criatura::find($createdCriatura['id']), 'Criatura with given id must be in DB');
        $this->assertModelData($criatura, $createdCriatura);
    }

    /**
     * @test read
     */
    public function test_read_criatura()
    {
        $criatura = Criatura::factory()->create();

        $dbCriatura = $this->criaturaRepo->find($criatura->id);

        $dbCriatura = $dbCriatura->toArray();
        $this->assertModelData($criatura->toArray(), $dbCriatura);
    }

    /**
     * @test update
     */
    public function test_update_criatura()
    {
        $criatura = Criatura::factory()->create();
        $fakeCriatura = Criatura::factory()->make()->toArray();

        $updatedCriatura = $this->criaturaRepo->update($fakeCriatura, $criatura->id);

        $this->assertModelData($fakeCriatura, $updatedCriatura->toArray());
        $dbCriatura = $this->criaturaRepo->find($criatura->id);
        $this->assertModelData($fakeCriatura, $dbCriatura->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_criatura()
    {
        $criatura = Criatura::factory()->create();

        $resp = $this->criaturaRepo->delete($criatura->id);

        $this->assertTrue($resp);
        $this->assertNull(Criatura::find($criatura->id), 'Criatura should not exist in DB');
    }
}
