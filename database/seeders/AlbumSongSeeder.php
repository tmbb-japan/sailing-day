<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Album;
use App\Models\Song;

class AlbumSongSeeder extends Seeder
{
    public function run(): void
    {
        // 임시: 앨범 ID
        $albumIds = [9, 10, 11, 12, 13, 14, 15, 16];
        foreach ($albumIds as $albumId) {
            DB::beginTransaction();
            try {
                for ($i = 0; $i < 5; $i++) {
                    Song::create([
                        'title' => 'Song ' . rand(1, 1000),
                        'album_id' => $albumId,
                    ]);
                }
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                throw $e;
            }
        }
    }
}
