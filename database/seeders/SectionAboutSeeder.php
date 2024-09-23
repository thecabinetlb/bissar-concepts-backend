<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = [
            [
                'id'=>1,
                'title' => 'Creating Bespoke Spaces that are Distinctive, Compelling and Timeless.',
                'description' => 'Armed with boundless creativity and an unwavering passion for interior design, Zaher Bissar embarked on a journey back in 2014, founding Bissar Concepts. His commitment to crafting spaces that echo an artistic vision and a relentless pursuit of beauty has captivated clients and admirers alike.',
                'image' => asset('/images/about/image.jpg'),
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('section_abouts')->insert($about);    
    }
}
