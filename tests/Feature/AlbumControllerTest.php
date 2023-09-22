<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Album;
use App\Models\Song;

class AlbumControllerTest extends TestCase
{
    public function test_example(): void
    {
        // Arrange
        $album = Album::factory()->create();
        $song1 = factory(Song::class)->create(['album_id' => $album->id]);
        $song2 = factory(Song::class)->create(['album_id' => $album->id]);

        // Act
        $response = $this->get('/');

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('main');
        $response->assertViewHas('albums');
        $response->assertSee($album->title);
        $response->assertSee($song1->title);
        $response->assertSee($song2->title);
    }
}
