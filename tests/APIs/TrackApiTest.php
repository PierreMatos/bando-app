<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Track;

class TrackApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_track()
    {
        $track = Track::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tracks', $track
        );

        $this->assertApiResponse($track);
    }

    /**
     * @test
     */
    public function test_read_track()
    {
        $track = Track::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/tracks/'.$track->id
        );

        $this->assertApiResponse($track->toArray());
    }

    /**
     * @test
     */
    public function test_update_track()
    {
        $track = Track::factory()->create();
        $editedTrack = Track::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tracks/'.$track->id,
            $editedTrack
        );

        $this->assertApiResponse($editedTrack);
    }

    /**
     * @test
     */
    public function test_delete_track()
    {
        $track = Track::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tracks/'.$track->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tracks/'.$track->id
        );

        $this->response->assertStatus(404);
    }
}
