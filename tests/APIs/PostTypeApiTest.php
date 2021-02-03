<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PostType;

class PostTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_post_type()
    {
        $postType = PostType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/post_types', $postType
        );

        $this->assertApiResponse($postType);
    }

    /**
     * @test
     */
    public function test_read_post_type()
    {
        $postType = PostType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/post_types/'.$postType->id
        );

        $this->assertApiResponse($postType->toArray());
    }

    /**
     * @test
     */
    public function test_update_post_type()
    {
        $postType = PostType::factory()->create();
        $editedPostType = PostType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/post_types/'.$postType->id,
            $editedPostType
        );

        $this->assertApiResponse($editedPostType);
    }

    /**
     * @test
     */
    public function test_delete_post_type()
    {
        $postType = PostType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/post_types/'.$postType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/post_types/'.$postType->id
        );

        $this->response->assertStatus(404);
    }
}
