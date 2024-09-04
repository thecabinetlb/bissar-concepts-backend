<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialCarouselSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carousel = [
            [
                'title' => 'An edge of sophistication to simplicity, a whiff of modernism to the traditional.',
                'description' => 'By taking a fresh approach to design, we create viable and dynamic spaces that are as unique as the individuality of each of our clients.',
                'images' => json_encode([
                    url('/images_v1/editorial/images/03.jpg'),
                    url('/images_v1/editorial/images/01 Main Photo.jpg'),
                    url('/images_v1/editorial/images/01_Resized.jpg'),
                    url('/images_v1/editorial/images/02_Resized.jpg'),
                    url('/images_v1/editorial/images/03_Resized.jpg'),
                    url('/images_v1/editorial/images/04_Resized.jpg'),
                    url('/images_v1/editorial/images/05_Resized.jpg'),
                    url('/images_v1/editorial/images/06_Resized.jpg'),
                    url('/images_v1/editorial/images/07_Resized.jpg'),
                    url('/images_v1/editorial/images/09_Resized.jpg'),
                    url('/images_v1/editorial/images/10_Resized.jpg'),
                    url('/images_v1/editorial/images/012_Resized.jpg'),
                    url('/images_v1/editorial/images/13_Resized.jpg'),
                    url('/images_v1/editorial/images/14_Resized.jpg'),
                    url('/images_v1/editorial/images/15_Resized.jpg'),
                    url('/images_v1/editorial/images/16_Resized.jpg'),
                ]),
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('editorial_carousel_sections')->insert($carousel);    
    }
}
