<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = articles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text,
            'body' => $this->faker->text,
            'author' => $this->faker->name(),
            'likes' => $this->faker->randomDigit,
            'is_published' => $this->faker->name(),
        ];
    }
}
