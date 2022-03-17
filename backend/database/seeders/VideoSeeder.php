<?php

namespace Database\Seeders;

use App\Models\Video;
use Dotenv\Util\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            Video::create([
                'course_id' => rand(1, 5),
                'order' => rand(1, 10),
                'title' => "Lorem ipsum dolor sit, amet consectetur",
                'slug' => str("Lorem ipsum dolor sit, amet consectetur")->slug(),
                'link' => "https://www.youtube.com/embed/vu5-aKf_QqA",
            ]);
        }
    }
}
