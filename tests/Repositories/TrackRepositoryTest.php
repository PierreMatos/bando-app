<?php namespace Tests\Repositories;

use App\Models\Track;
use App\Repositories\TrackRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TrackRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TrackRepository
     */
    protected $trackRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->trackRepo = \App::make(TrackRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_track()
    {
        $track = Track::factory()->make()->toArray();

        $createdTrack = $this->trackRepo->create($track);

        $createdTrack = $createdTrack->toArray();
        $this->assertArrayHasKey('id', $createdTrack);
        $this->assertNotNull($createdTrack['id'], 'Created Track must have id specified');
        $this->assertNotNull(Track::find($createdTrack['id']), 'Track with given id must be in DB');
        $this->assertModelData($track, $createdTrack);
    }

    /**
     * @test read
     */
    public function test_read_track()
    {
        $track = Track::factory()->create();

        $dbTrack = $this->trackRepo->find($track->id);

        $dbTrack = $dbTrack->toArray();
        $this->assertModelData($track->toArray(), $dbTrack);
    }

    /**
     * @test update
     */
    public function test_update_track()
    {
        $track = Track::factory()->create();
        $fakeTrack = Track::factory()->make()->toArray();

        $updatedTrack = $this->trackRepo->update($fakeTrack, $track->id);

        $this->assertModelData($fakeTrack, $updatedTrack->toArray());
        $dbTrack = $this->trackRepo->find($track->id);
        $this->assertModelData($fakeTrack, $dbTrack->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_track()
    {
        $track = Track::factory()->create();

        $resp = $this->trackRepo->delete($track->id);

        $this->assertTrue($resp);
        $this->assertNull(Track::find($track->id), 'Track should not exist in DB');
    }
}
