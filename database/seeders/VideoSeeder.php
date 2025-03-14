<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video; // Impor model Video

class VideoSeeder extends Seeder
{
    public function run(): void
    {
        Video::create([
            'title' => 'Sample Video',
            'video_path' => 'videos/Video1.mp4'
        ]);
    }
}
