<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;

        return [
            'name' => $name,
            'description' => $this->faker->paragraph(10),
            'slug' => Str::slug($name, '-'),
            'img_url' => $this->faker->imageUrl(),
            'created_at' => $this->faker->date,
            'updated_at' => $this->faker->date
        ];
    }
}
