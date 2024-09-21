<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollaborationPageBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'id'=>1,
                'title' => 'Bringing our vision to life',
                'description' => 'We have collaborated with talented designers, merging our creative visions to design something truly exquisite.',
                'image' => asset('/images/innerhero/001.jpg'),
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('collaboration_banners')->insert($banners);    
    }
}
