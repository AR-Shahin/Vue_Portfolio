<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'facebook' => "https://www.facebook.com/arshahin200",
            'twitter' => "https://www.facebook.com/arshahin200",
            'youtube' => "https://www.youtube.com/channel/UCYxtDC_GVan9l1NFNthS3aQ",
            'github' => "https://github.com/AR-Shahin",
            'linkedin' => "https://www.linkedin.com/in/anisur-rahman-shahin-31295b186/",
            'website' => "https://tutspack.com/",
            'resume' => "https://www.facebook.com/arshahin200",
        ]);
    }
}
