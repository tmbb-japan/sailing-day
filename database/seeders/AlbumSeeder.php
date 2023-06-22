<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        // 이미지 파일 경로
        $imageDirectory = public_path('images');
        // 디렉토리 내 모든 이미지 파일에 대해 반복
        $files = File::files($imageDirectory);
        foreach ($files as $file) {
            $imagePath = $file->getPathname();
            // 이미지 확장자 확인
            $extension = strtolower($file->getExtension());
            if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                continue;
            }
            // 이미지 크기 조절
            $resizedImage = Image::make($imagePath)->fit(500, 450)->encode('jpg');
            if ($resizedImage === false) {
                continue;
            }
            // 고유한 파일명 생성
            $filename = Str::random(20) . '.jpg';
            // 파일 시스템에 이미지 저장
            $success = Storage::disk('public')->put('albums/' . $filename, $resizedImage);
            if (!$success) {
                continue;
            }
            // 심볼릭 링크를 고려해 이미지 패스 저장
            $storagePath = 'storage/albums/' . $filename;

            // 모델을 사용하여 데이터베이스에 이미지 패스 저장
            Album::create([
                'image_path' => $storagePath,
            ]);
        }
    }
}
?>