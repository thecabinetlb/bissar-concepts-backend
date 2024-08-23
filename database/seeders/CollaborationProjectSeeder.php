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
              'id' => 1, 
              'title' => 'Modern Art Gallery', 
              'type_id' => 1,
              'completion_date' => '2023-05-10',
              'architects' => json_encode(['Zaher Bissar', 'Lara Collins', 'Michael Lee']),
              'year' => 2023,
              'location' => 'Dubai, UAE',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'banner' => url('/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/images/projects/collaborations/thumbnails/collabs1.webp'),
              'images' => json_encode([
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
              ]),
              'client' => 'Art & Co.',
              'slug' => 'modern-art-gallery',
              'category_id' => 2,
              'created_at' => now(), // Set created_at to current timestamp
              'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
              'id' => 2, 
              'title' => 'Corporate Office Building', 
              'type_id' => 2,
              'completion_date' => '2022-08-15',
              'architects' => json_encode(['Zaher Bissar', 'Emily Turner']),
              'year' => 2022,
              'location' => 'Dubai, UAE',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'banner' => url('/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/images/projects/collaborations/thumbnails/collabs2.webp'),
              'images' => json_encode([
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
              ]),
              'client' => 'Business Solutions Ltd.',
              'slug' => 'corporate-office-building',
              'category_id' => 2,
              'created_at' => now(), // Set created_at to current timestamp
              'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
              'id' => 3, 
              'title' => 'Luxury Hotel', 
              'type_id' => 3,
              'completion_date' => '2021-11-02',
              'architects' => json_encode(['Zaher Bissar', 'John Doe', 'Alice Green']),
              'year' => 2021,
              'location' => 'Dubai, UAE',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'banner' => url('/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/images/projects/collaborations/thumbnails/collabs3.webp'),
              'images' => json_encode([
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
              ]),
              'client' => 'Luxury Stays',
              'slug' => 'luxury-hotel',
              'category_id' => 2,
              'created_at' => now(), // Set created_at to current timestamp
              'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
              'id' => 4, 
              'title' => 'Residential Complex', 
              'type_id' => 4,
              'completion_date' => '2020-07-20',
              'architects' => json_encode(['Zaher Bissar', 'Robert Brown']),
              'year' => 2020,
              'location' => 'London, UK',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'banner' => url('/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/images/projects/collaborations/thumbnails/collabs4.webp'),
              'images' => json_encode([
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
              ]),
              'client' => 'Urban Developments',
              'slug' => 'residential-complex',
              'category_id' => 2,
              'created_at' => now(), // Set created_at to current timestamp
              'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
              'id' => 5, 
              'title' => 'Eco-Friendly Office Space', 
              'type_id' => 1,
              'completion_date' => '2019-10-05',
              'architects' => json_encode(['Zaher Bissar', 'Laura White']),
              'year' => 2019,
              'location' => 'Berlin, Germany',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'banner' => url('/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/images/projects/collaborations/thumbnails/collabs1.webp'),
              'images' => json_encode([
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
              ]),
              'client' => 'Green Innovators',
              'slug' => 'eco-friendly-office-space',
              'category_id' => 2,
              'created_at' => now(), // Set created_at to current timestamp
              'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [ 
              'id' => 6, 
              'title' => 'Modern Residential Tower', 
              'type_id' => 2,
              'completion_date' => '2018-04-12',
              'architects' => json_encode(['Zaher Bissar', 'David Black', 'Sophia Green']),
              'year' => 2018,
              'location' => 'Tokyo, Japan',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'banner' => url('/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/images/projects/collaborations/thumbnails/collabs2.webp'),
              'images' => json_encode([
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
                url('/images/projects/collaborations/images/image.webp'),
              ]),
              'client' => 'Tokyo Builders Inc.',
              'slug' => 'modern-residential-tower',
              'category_id' => 2,
              'created_at' => now(), // Set created_at to current timestamp
              'updated_at' => now(), // Optionally set updated_at to current timestamp
            ]
        ];

        DB::table('collaboration_projects')->insert($projects);
    }
}
