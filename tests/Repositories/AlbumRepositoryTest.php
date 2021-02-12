<?php namespace Tests\Repositories;

use App\Models\Album;
use App\Repositories\AlbumRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AlbumRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AlbumRepository
     */
    protected $albumRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->albumRepo = \App::make(AlbumRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_album()
    {
        $album = Album::factory()->make()->toArray();

        $createdAlbum = $this->albumRepo->create($album);

        $createdAlbum = $createdAlbum->toArray();
        $this->assertArrayHasKey('id', $createdAlbum);
        $this->assertNotNull($createdAlbum['id'], 'Created Album must have id specified');
        $this->assertNotNull(Album::find($createdAlbum['id']), 'Album with given id must be in DB');
        $this->assertModelData($album, $createdAlbum);
    }

    /**
     * @test read
     */
    public function test_read_album()
    {
        $album = Album::factory()->create();

        $dbAlbum = $this->albumRepo->find($album->id);

        $dbAlbum = $dbAlbum->toArray();
        $this->assertModelData($album->toArray(), $dbAlbum);
    }

    /**
     * @test update
     */
    public function test_update_album()
    {
        $album = Album::factory()->create();
        $fakeAlbum = Album::factory()->make()->toArray();

        $updatedAlbum = $this->albumRepo->update($fakeAlbum, $album->id);

        $this->assertModelData($fakeAlbum, $updatedAlbum->toArray());
        $dbAlbum = $this->albumRepo->find($album->id);
        $this->assertModelData($fakeAlbum, $dbAlbum->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_album()
    {
        $album = Album::factory()->create();

        $resp = $this->albumRepo->delete($album->id);

        $this->assertTrue($resp);
        $this->assertNull(Album::find($album->id), 'Album should not exist in DB');
    }
}
