<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "title"=> "Custom Designs",
                "image"=> asset('/images/skills/skills1.jpg'),
                "description"=> "Our services uplift your home with a touch of luxury and sophistication.",
                "is_featured"=>true,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                "title"=> "Exquisite Furniture",
                "image"=> asset('/images/skills/skills2.jpg'),
                "description"=> "From the world to your home, our curated furniture selection elevates your space.",
                "is_featured"=>true,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                "title"=> "Luxury Fit-Out",
                "image"=> asset('/images/skills/skills3.jpg'),
                "description"=> "Adding the last touches to your home with an eye for detail and high-end finishing.",
                "is_featured"=>true,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ]
        ];
        DB::table('section_services')->insert($data);    }
}
