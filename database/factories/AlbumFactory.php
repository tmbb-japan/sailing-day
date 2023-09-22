<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Album;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition()
    {
        return [
            'image_path' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence,
            'artist_name' => $this->faker->name,
            'released_at' => $this->faker->date,
        ];
    }

    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'released_at' => now(),
            ];
        });
    }
}
