<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionBehindTheBrandImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'id'=>1,
                'title' => 'Behind the Brand',
                'image' => asset('/images/editorial/editorial.jpg'),
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('section_behind_the_brand_images')->insert($images);       
     }
}
