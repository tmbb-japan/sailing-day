<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Song;

class SongFactory extends Factory
{
    protected $model = Song::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'album_id' => function () {
                return \App\Models\Album::factory()->published()->create()->id;
            },
        ];
    }
}
