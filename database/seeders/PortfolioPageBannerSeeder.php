<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioPageBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'id'=>1,
                'title' => 'Your sanctuary. Your vision.',
                'description' => 'We design your dream house to your vision and design palette, ultimately creating a space that reflects your character.',
                'image' => url('/images_v1/innerhero/100.jpg'),
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('portfolio_banners')->insert($banners);    
    }
}
