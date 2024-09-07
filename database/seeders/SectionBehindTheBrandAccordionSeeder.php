<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionBehindTheBrandAccordionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accordions = [
            [
                'id' => 1,
                'title' => 'The creative mind',
                'description' => 'Armed with boundless creativity and an unwavering passion for interior design, Zaher Bissar embarked on a journey back in 2014, founding Bissar Concepts. His commitment to crafting spaces that echo an artistic vision and a relentless pursuit of beauty has captivated clients and admirers alike. Bissar Concept’s portfolio grew, each project bearing the imprint of its unique design. With time, what began as a solitary venture evolved into a thriving interior design company, reflecting the intricate charm of interior design.',
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Our Story',
                'description' => 'Currently situated in Riyadh, with a strong presence in Beirut, Bissar Concepts is the epitome of sophisticated living. Having extended its influence across the region, the luxury atelier holds hundreds of projects spanning across KSA, UAE, the Levant, and Egypt. Bissar Concepts offers a world of bespoke luxury, ranging from intricate architectural refinement to customized design, where every space is meticulously curated to illustrate elegance and refinement. Our studio fully integrates interior design services specialized in upscale projects including palaces, private residences, public buildings, corporate offices, and hotels.',
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Our Approach',
                'description' => 'By taking a fresh approach to design, we create viable and dynamic spaces that are as unique as the individuality of each of our clients. Our work ranges from minimalism to classicism, with luxury contemporary defining most of our projects. We aim to consistently reflect the timeless elegance of classical aesthetics, but also introduce tradition with a modern flair.',
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Our Philosophy',
                'description' => 'Authenticity, individuality, and innovation are the cornerstone of every project we undertake. Our work is designed to blend aesthetics with functionality, seamlessly integrating the aspirations and lifestyles of our clients into every detail with finesse and a focus on well-being. Drawing inspiration from light, nature, and the art of equilibrium, our interior architecture serves as the foundation of our conceptual framework. Meanwhile, the essence of our philosophy is defined by the use of noble materials, luxurious detailing, and refined design. Our mission transcends the ordinary, aiming to orchestrate immersive experiences that captivate the senses: mentally by adding elements of surprise, spiritually by stimulating tranquillity, and culturally by infusing art and history.',
                'is_featured'=> true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('section_behind_the_brand_accordions')->insert($accordions);       
    }
}
