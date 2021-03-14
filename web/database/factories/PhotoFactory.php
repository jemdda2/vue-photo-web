<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Str::random(12),
            'user_id' => fn() => factory(App\User::class)->create()->id,
            'filename' => Str::random(12) . '.jpg',
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    }
}
