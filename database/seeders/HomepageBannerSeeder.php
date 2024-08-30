<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'id'=>1,
                'title' => 'Home of Luxury',
                'description' => '"Luxury is when it seems flawless, when you reach the right balance between all elements. Understated theatricality – that is what my luxury is all about."Jean-Louis Deniot',
                'image' => url('/images/hero/Option_1.jpg'),
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('homepage_banners')->insert($banners);    
    }

}
