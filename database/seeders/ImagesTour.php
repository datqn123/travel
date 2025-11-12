<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTour extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images_tour')->insert([
            [
                'tour_id' => '1',
                'caption' => 'banner',
                'image_url' => 'tours/tour_id1_1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
