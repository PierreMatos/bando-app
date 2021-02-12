<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Album;

class AlbumApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_album()
    {
        $album = Album::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/albums', $album
        );

        $this->assertApiResponse($album);
    }

    /**
     * @test
     */
    public function test_read_album()
    {
        $album = Album::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/albums/'.$album->id
        );

        $this->assertApiResponse($album->toArray());
    }

    /**
     * @test
     */
    public function test_update_album()
    {
        $album = Album::factory()->create();
        $editedAlbum = Album::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/albums/'.$album->id,
            $editedAlbum
        );

        $this->assertApiResponse($editedAlbum);
    }

    /**
     * @test
     */
    public function test_delete_album()
    {
        $album = Album::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/albums/'.$album->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/albums/'.$album->id
        );

        $this->response->assertStatus(404);
    }
}
