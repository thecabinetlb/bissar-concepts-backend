<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollaborationProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'id'=> 1,
                'title' => 'De Gournay',
                'category' => 'Residential',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2020,
                'location' => 'Riyadh',
                'description' => 'Welcome to the alleys of Old Damascus… A custom-made wallpaper of a scenic panorama that conveys the charming atmosphere of the historical city, is designed by “Bissar Concepts”. Exquisitely detailed 24 hand-painted panels done over 6 months in collaboration with “De Gournay”.',
                'banner' => url('/images_v1/projects/collaborations/de_gournay/banners/banner1.jpg'),
                'thumbnail' => url('/images_v1/projects/collaborations/de_gournay/thumbnails/DG1 (1).jpg'),
                'images' => json_encode([
                    url('/images_v1/projects/collaborations/de_gournay/thumbnails/DG1 (1).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG1 (3).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG1 (3a).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG1 (4).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG1 (5).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG1 (6).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG1 (7).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG2 (1).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG2 (2).jpg'),
                    url('/images_v1/projects/collaborations/de_gournay/images/DG2 (3).jpg'),
                ]),
                'client' => 'Art & Co.',
                'slug' => 'de-gournay',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=> 2,
                'title' => 'Preciosa',
                'category' => 'Residential',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Riyadh',
                'description' => "This is a substantial long-term collaboration. One of the highlights is “The Crystal Biosphere” Installation: Unfolding nature’s story by transforming this indoor double-height space into a dreamy escape with heavenly crystals of flying birds and falling leaves over the lush greenery.",
                'banner' => url('/images_v1/projects/collaborations/preciosa/banners/banner3.jpg'),
                'thumbnail' => url('/images_v1/projects/collaborations/preciosa/thumbnails/collabs3.jpg'),
                'images' => json_encode([
                    url('/images_v1/projects/collaborations/preciosa/images/PR1 (1).jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR1 (5).jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR1 (6).jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR1 (7).jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR2.jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR10.jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR20 (1).jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR20 (2).jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR30.jpg'),
                    url('/images_v1/projects/collaborations/preciosa/images/PR31.jpg'),
                ]),
                'client' => 'Luxury Stays',
                'slug' => 'preciosa',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=> 3,
                'title' => 'Baccarat',
                'category' => 'Residential',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2019,
                'location' => 'Riyadh',
                'description' => "Showcasing opulence and grandeur with custom-size masterpieces from “Baccarat”.",
                'banner' => url('/images_v1/projects/collaborations/baccarat/banners/banner2.jpg'),
                'thumbnail' => url('/images_v1/projects/collaborations/baccarat/thumbnails/collabs2.jpg'),
                'images' => json_encode([
                    url('/images_v1/projects/collaborations/baccarat/images/001.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/1 Swipe 1.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/2 Swipe 2.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/002.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/003.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/012.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/IMG_9540.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/IMG_9542.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/IMG_9543.jpg'),
                    url('/images_v1/projects/collaborations/baccarat/images/Optional.jpg'),
                ]),
                'client' => 'Business Solutions Ltd.',
                'slug' => 'baccarat',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'=> 4,
                'title' => 'Italamp',
                'category' => 'Residential',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Riyadh',
                'description' => "Another long-term collaboration where some custom-size chandeliers were tailored for some of our projects.",
                'banner' => url('/images_v1/projects/collaborations/italamp/banners/banner4.jpg'),
                'thumbnail' => url('/images_v1/projects/collaborations/italamp/thumbnails/collabs4.jpg'),
                'images' => json_encode([
                    url('/images_v1/projects/collaborations/italamp/images/023 Corridor (18).jpg'),
                    url('/images_v1/projects/collaborations/italamp/images/023 Corridor (19).jpg'),
                    url('/images_v1/projects/collaborations/italamp/images/023 Corridor (31).jpg'),
                    url('/images_v1/projects/collaborations/italamp/images/IMG_6656.jpg'),
                    url('/images_v1/projects/collaborations/italamp/images/IMG_6665.jpg'),
                ]),
                'client' => 'Urban Developments',
                'slug' => 'italamp',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('collaboration_projects')->insert($projects);
    }
}
