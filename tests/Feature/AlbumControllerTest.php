<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Album; // Album 모델 추가
use App\Models\Song; // Song 모델 추가

class AlbumControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // Arrange
        $album = Album::factory()->published()->create();
        $song1 = factory(Song::class)->create(['album_id' => $album->id]);
        $song2 = factory(Song::class)->create(['album_id' => $album->id]);

        // Act - 테스트 수행
        $response = $this->get('/');

        // Assert - 결과 검증
        $response->assertStatus(200); // HTTP 응답 상태 코드 확인
        $response->assertViewIs('main'); // 뷰 확인
        $response->assertViewHas('albums'); // 'albums' 변수가 뷰에 전달되었는지 확인
        $response->assertSee($album->title); // 앨범 제목이 페이지에 표시되는지 확인
        $response->assertSee($song1->title); // 송 제목이 페이지에 표시되는지 확인
        $response->assertSee($song2->title); // 송 제목이 페이지에 표시되는지 확인
    }
}
