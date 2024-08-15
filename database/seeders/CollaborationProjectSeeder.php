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
              'type' => 'Design',
              'completion_date' => '2023-05-10',
              'architects' => ['Zaher Bissar', 'Lara Collins', 'Michael Lee'],
              'year' => 2023,
              'location' => 'Dubai, UAE',
              'description' => `Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.`,
              'banner' => url('/storage/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/storage/images/projects/collaborations/thumbnails/collabs1.webp'),
              'images' => [
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
              ],
              'client' => 'Art & Co.',
              'slug' => 'modern-art-gallery',
              'category' => 'Collaborations'
            ],
            [ 
              'id' => 2, 
              'title' => 'Corporate Office Building', 
              'type' => 'Houses',
              'completion_date' => '2022-08-15',
              'architects' => ['Zaher Bissar', 'Emily Turner'],
              'year' => 2022,
              'location' => 'Dubai, UAE',
              'description' => `Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.`,
              'banner' => url('/storage/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/storage/images/projects/collaborations/thumbnails/collabs2.webp'),
              'images' => [
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
              ],
              'client' => 'Business Solutions Ltd.',
              'slug' => 'corporate-office-building',
              'category' => 'Collaborations'
            ],
            [ 
              'id' => 3, 
              'title' => 'Luxury Hotel', 
              'type' => 'Interior',
              'completion_date' => '2021-11-02',
              'architects' => ['Zaher Bissar', 'John Doe', 'Alice Green'],
              'year' => 2021,
              'location' => 'Dubai, UAE',
              'description' => `Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.`,
              'banner' => url('/storage/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/storage/images/projects/collaborations/thumbnails/collabs3.webp'),
              'images' => [
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
              ],
              'client' => 'Luxury Stays',
              'slug' => 'luxury-hotel',
              'category' => 'Collaborations'
            ],
            [ 
              'id' => 4, 
              'title' => 'Residential Complex', 
              'type' => 'Living',
              'completion_date' => '2020-07-20',
              'architects' => ['Zaher Bissar', 'Robert Brown'],
              'year' => 2020,
              'location' => 'London, UK',
              'description' => `Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.`,
              'banner' => url('/storage/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/storage/images/projects/collaborations/thumbnails/collabs4.webp'),
              'images' => [
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
              ],
              'client' => 'Urban Developments',
              'slug' => 'residential-complex',
              'category' => 'Collaborations'
            ],
            [ 
              'id' => 5, 
              'title' => 'Eco-Friendly Office Space', 
              'type' => 'Design',
              'completion_date' => '2019-10-05',
              'architects' => ['Zaher Bissar', 'Laura White'],
              'year' => 2019,
              'location' => 'Berlin, Germany',
              'description' => `Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.`,
               'banner' => url('/storage/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/storage/images/projects/collaborations/thumbnails/collabs1.webp'),
              'images' => [
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
              ],
              'client' => 'Green Innovators',
              'slug' => 'eco-friendly-office-space',
              'category' => 'Collaborations'
            ],
            [ 
              'id' => 6, 
              'title' => 'Modern Residential Tower', 
              'type' => 'Houses',
              'completion_date' => '2018-04-12',
              'architects' => ['Zaher Bissar', 'David Black', 'Sophia Green'],
              'year' => 2018,
              'location' => 'Tokyo, Japan',
              'description' => `Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.`,
               'banner' => url('/storage/images/innerhero/projectdetails.webp'),
              'thumbnail' => url('/storage/images/projects/collaborations/thumbnails/collabs2.webp'),
              'images' => [
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
                url('/storage/images/projects/collaborations/images/image.webp'),
              ],
              'client' => 'Tokyo Builders Inc.',
              'slug' => 'modern-residential-tower',
              'category' => 'Collaborations'
            ]
        ];

        DB::table('collaborations_projects')->insert($projects);
    }
}
