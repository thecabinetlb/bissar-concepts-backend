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
            'title' => 'De Gournay',
            'category' => 'Design',
            'architects' => json_encode(['Zaher Bissar', 'Others']),
            'year' => 2023,
            'location' => 'Dubai, UAE',
            'banner' => url('/images/projects/collaborations/de_gournay/banners/banner1.webp'),
            'thumbnail' => url('/images/projects/collaborations/de_gournay/thumbnails/collabs1.webp'),
            'images' => json_encode([
                url('/images/projects/collaborations/de_gournay/images/Rectangle 68.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 77.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 72.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 71.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 94.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 95.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 96.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 73.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 74.webp'),
                url('/images/projects/collaborations/de_gournay/images/Rectangle 75.webp'),
            ]),
            'client' => 'Art & Co.',
            'slug' => 'de-gournay',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
        ],
        [
            'title' => 'Preciosa',
            'category' => 'Interior',
            'architects' => json_encode(['Zaher Bissar', 'Others']),
            'year' => 2021,
            'location' => 'Dubai, UAE',
            'banner' => url('/images/projects/collaborations/preciosa/banners/banner3.webp'),
            'thumbnail' => url('/images/projects/collaborations/preciosa/thumbnails/collabs3.webp'),
            'images' => json_encode([
                url('/images/projects/collaborations/preciosa/images/Rectangle 82.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 77.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 106.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 107.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 201.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 81.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 80.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 111.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 108.webp'),
                url('/images/projects/collaborations/preciosa/images/Rectangle 109.webp'),
            ]),
            'client' => 'Luxury Stays',
            'slug' => 'preciosa',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
        ],
        [
            'title' => 'Baccarat',
            'category' => 'Houses',
            'architects' => json_encode(['Zaher Bissar', 'Others']),
            'year' => 2022,
            'location' => 'Dubai, UAE',
            'banner' => url('/images/projects/collaborations/baccarat/banners/banner2.webp'),
            'thumbnail' => url('/images/projects/collaborations/baccarat/thumbnails/collabs2.webp'),
            'images' => json_encode([
                url('/images/projects/collaborations/baccarat/images/Rectangle 83.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 84.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 97.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 88.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 98.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 99.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 85.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 87.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 100.webp'),
                url('/images/projects/collaborations/baccarat/images/Rectangle 86.webp'),
            ]),
            'client' => 'Business Solutions Ltd.',
            'slug' => 'baccarat',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
        ],
        [
            'title' => 'Italamp',
            'category' => 'Living',
            'architects' => json_encode(['Zaher Bissar', 'Others']),
            'year' => 2020,
            'location' => 'London, UK',
            'banner' => url('/images/projects/collaborations/italamp/banners/banner4.webp'),
            'thumbnail' => url('/images/projects/collaborations/italamp/thumbnails/collabs4.webp'),
            'images' => json_encode([
                url('/images/projects/collaborations/italamp/images/Rectangle 92.webp'),
                url('/images/projects/collaborations/italamp/images/Rectangle 112.webp'),
                url('/images/projects/collaborations/italamp/images/Rectangle 90.webp'),
                url('/images/projects/collaborations/italamp/images/Rectangle 89.webp'),
                url('/images/projects/collaborations/italamp/images/Rectangle 93.webp'),
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
