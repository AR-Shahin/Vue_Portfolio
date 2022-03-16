<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            "Web Development", "Web Design", "Programming", "Data Structure", "Algorithm"
        ];

        foreach ($courses as $course) {
            Course::create([
                'name' => $course,
                'slug' => str($course)->slug(),
                'duration' => rand(1, 10),
                'image' => "e",
                'thumb' => "e",
                'short_des' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus sapiente asperiores quasi minima vero dolores architecto odit magnam dignissimos!",
                'long_des' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus sapiente asperiores quasi minima vero dolores architecto odit magnam dignissimos!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus sapiente asperiores quasi minima vero dolores architecto odit magnam dignissimos!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus sapiente asperiores quasi minima vero dolores architecto odit magnam dignissimos!",
            ]);
        }
    }
}
