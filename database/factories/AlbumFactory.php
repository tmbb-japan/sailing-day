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
        ];
    }
}
