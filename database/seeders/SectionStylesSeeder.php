<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionStylesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "title"=> "Contemporary Design",
                "image"=> asset('/images_v1/styles/OPtion 2.jpg'),
                "subtitle"=> "Modern flair with a classical spin",
                "description"=> "Step into a world that mirrors your bold and unrestrained creativity. A captivating fusion of freeform style with luxurious materials and a touch of traditional craftsmanship, resulting in spaces that defy convention and evoke a sense of unparalleled distinction.",
                "is_featured"=>true,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                "title"=> "Modern Home",
                "image"=> asset('/images_v1/styles/Option 1.jpg'),
                "subtitle"=> "Where sleek meets chic",
                "description"=> "Your sanctuary of sophistication, where minimalist elegance and clean finishes take center stage. An open-concept layout flooded with natural light, featuring a sleek surface and uncluttered design, and reflecting simplicity and functionality.",
                "is_featured"=>true,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ],
            [
                "title"=> "Classic Home",
                "image"=> asset('/images_v1/styles/03_Resized.jpg'),
                "subtitle"=> "A touch of timeless elegance",
                "description"=> "As you step into your home, you’re transported to centuries of grandeur with every corner designed to narrate a tale of classical elegance. Ornate moldings, rich wood finishes, gilded mirrors, antiques, and marble mantels adorn your space, exuding timeless beauty and enduring charm. Each element radiates the charming appeal of a tradition home while elevating its ambiance.",
                "is_featured"=>true,
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Optionally set updated_at to current timestamp
            ]
        ];
        DB::table('section_styles')->insert($data);
    }
}
