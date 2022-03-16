<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => rand(1, 5),
            'order' => rand(1, 10),
            'title' => $this->faker->sentence(),
            'slug' => str($this->faker->sentence())->slug(),
            'link' => "https://www.youtube.com/embed/vu5-aKf_QqA",
        ];
    }
}
