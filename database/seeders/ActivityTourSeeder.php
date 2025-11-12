<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activity_tour')->insert([
            [
                'tour_id' => '1',
                'name_activity' => 'Vườn Ươm Sáng Tạo Disney',
                'description' => 'Hãy bắt đầu hành trình khó quên của bạn trên tàu tại Disney Imagination Garden—một thung lũng, khu vườn và không gian biểu diễn ngoài trời đầy mê hoặc, nơi khơi nguồn những cuộc phiêu lưu mới.',
                'image_url' => 'activities/vuon_uom_sang_tao.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
