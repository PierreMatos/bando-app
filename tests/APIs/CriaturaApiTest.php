<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Criatura;

class CriaturaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_criatura()
    {
        $criatura = Criatura::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/criaturas', $criatura
        );

        $this->assertApiResponse($criatura);
    }

    /**
     * @test
     */
    public function test_read_criatura()
    {
        $criatura = Criatura::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/criaturas/'.$criatura->id
        );

        $this->assertApiResponse($criatura->toArray());
    }

    /**
     * @test
     */
    public function test_update_criatura()
    {
        $criatura = Criatura::factory()->create();
        $editedCriatura = Criatura::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/criaturas/'.$criatura->id,
            $editedCriatura
        );

        $this->assertApiResponse($editedCriatura);
    }

    /**
     * @test
     */
    public function test_delete_criatura()
    {
        $criatura = Criatura::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/criaturas/'.$criatura->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/criaturas/'.$criatura->id
        );

        $this->response->assertStatus(404);
    }
}
