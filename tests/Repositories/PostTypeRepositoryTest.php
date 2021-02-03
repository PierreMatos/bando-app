<?php namespace Tests\Repositories;

use App\Models\PostType;
use App\Repositories\PostTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PostTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PostTypeRepository
     */
    protected $postTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->postTypeRepo = \App::make(PostTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_post_type()
    {
        $postType = PostType::factory()->make()->toArray();

        $createdPostType = $this->postTypeRepo->create($postType);

        $createdPostType = $createdPostType->toArray();
        $this->assertArrayHasKey('id', $createdPostType);
        $this->assertNotNull($createdPostType['id'], 'Created PostType must have id specified');
        $this->assertNotNull(PostType::find($createdPostType['id']), 'PostType with given id must be in DB');
        $this->assertModelData($postType, $createdPostType);
    }

    /**
     * @test read
     */
    public function test_read_post_type()
    {
        $postType = PostType::factory()->create();

        $dbPostType = $this->postTypeRepo->find($postType->id);

        $dbPostType = $dbPostType->toArray();
        $this->assertModelData($postType->toArray(), $dbPostType);
    }

    /**
     * @test update
     */
    public function test_update_post_type()
    {
        $postType = PostType::factory()->create();
        $fakePostType = PostType::factory()->make()->toArray();

        $updatedPostType = $this->postTypeRepo->update($fakePostType, $postType->id);

        $this->assertModelData($fakePostType, $updatedPostType->toArray());
        $dbPostType = $this->postTypeRepo->find($postType->id);
        $this->assertModelData($fakePostType, $dbPostType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_post_type()
    {
        $postType = PostType::factory()->create();

        $resp = $this->postTypeRepo->delete($postType->id);

        $this->assertTrue($resp);
        $this->assertNull(PostType::find($postType->id), 'PostType should not exist in DB');
    }
}
