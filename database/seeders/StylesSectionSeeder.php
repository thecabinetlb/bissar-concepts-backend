<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StylesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id"=> 1,
                "title"=> "Contemporary Design",
                "image"=> url('/storage/images/styles/styles1.webp'),
                "subtitle"=> "Modern flair with a classical spin",
                "description"=> "Step into a world that mirrors your bold and unrestrained creativity. A captivating fusion of freeform style with luxurious materials and a touch of traditional craftsmanship, resulting in spaces that defy convention and evoke a sense of unparalleled distinction."
            ],
            [
                "id"=> 2,
                "title"=> "Modern Home",
                "image"=> url('/storage/images/styles/styles2.webp'),
                "subtitle"=> "Where sleek meets chic",
                "description"=> "Your sanctuary of sophistication, where minimalist elegance and clean finishes take center stage. An open-concept layout flooded with natural light, featuring a sleek surface and uncluttered design, and reflecting simplicity and functionality."
            ],
            [
                "id"=> 3,
                "title"=> "Classic Home",
                "image"=> url('/storage/images/styles/styles3.webp'),
                "subtitle"=> "A touch of timeless elegance",
                "description"=> "As you step into your home, you’re transported to centuries of grandeur with every corner designed to narrate a tale of classical elegance. Ornate moldings, rich wood finishes, gilded mirrors, antiques, and marble mantels adorn your space, exuding timeless beauty and enduring charm. Each element radiates the charming appeal of a tradition home while elevating its ambiance."
            ]           
        ];
        DB::table('styles_section')->insert($data);
    }
}
