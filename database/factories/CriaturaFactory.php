<?php

namespace Database\Factories;

use App\Models\Criatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Criatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->word,
        'name' => $this->faker->word,
        'description' => $this->faker->word,
        'bio' => $this->faker->word,
        'file' => $this->faker->word,
        'image' => $this->faker->word,
        'link' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
