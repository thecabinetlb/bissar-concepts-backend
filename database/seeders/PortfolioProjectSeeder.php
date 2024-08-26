<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'The Art Collector Private Residence',
                'category' => 'Private Residence',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2022,
                'location' => 'Riyadh',
                'description' => 'One of the first assignments for us is to set the inspiration for the project; we invest a tremendous amount of time seeking inspiration from our client’s lifestyle and personal tastes. Aware of our client’s interest in fine art, we have selected masterpieces from the most prestigious galleries in the world. The warm and textured wooden high walls has created the perfect background for these art pieces. This project with fortunate high ceilings was transformed into a hidden museum in a private home.',
                'banner' => url('/images/projects/portfolio/the_collector_private_residence/banners/banner1.webp'),
                'thumbnail' => url('/images/projects/portfolio/the_collector_private_residence/thumbnails/works1.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/the_collector_private_residence/images/Rectangle 16.webp')
                ]),
                'client' => 'Private',
                'slug' => 'the-art-collector-private-residence',
                 'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Al Rawda Reception Villa',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2020,
                'location' => 'Riyadh',
                'description' => 'This gorgeous 1270 m² project in Riyadh is the family reception villa that makes part of an extensive private complex. It is a beautiful example of a luxury contemporary home, infused with Islamic influences in design and architecture, with interiors designed in a sleek and elegant contemporary style.',
                'banner' => url('/images/projects/portfolio/al_rawda_reception_villa/banners/banner2.webp'),
                'thumbnail' => url('/images/projects/portfolio/al_rawda_reception_villa/thumbnails/works2.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/al_rawda_reception_villa/images/Rectangle 16.webp')
                ]),
                'client' => 'Private',
                'slug' => 'al-rawda-reception-villa',
                 'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'A Family Affair Private Villa',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2021,
                'location' => 'Riyadh',
                'description' => 'With a common idea of shared spaces for a shared way of life, we have designed this 1800 m² family home in Riyadh with privacy as a priority. Privacy from outside neighbours and privacy between internal spaces. Large windows that provide spectacular views outwards, they will also provide views inward so the placement and proportions of the spaces were carefully designed to respect privacy. The villa is very much made up of two spaces – formal and family areas – so that everything comes together in a harmonious way. With soft muted hues, sculpted silhouettes, and exquisite patterns that give the home a timelessly elegant and luxurious appeal.',
                'banner' => url('/images/projects/portfolio/a_family_affair_private_villa/banners/banner3.webp'),
                'thumbnail' => url('/images/projects/portfolio/a_family_affair_private_villa/thumbnails/works3.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/a_family_affair_private_villa/images/Rectangle 16.webp')
                ]),
                'client' => 'Private',
                'slug' => 'a-family-affair-private-villa',
                 'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Private Villa Courtyard Living',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2023,
                'location' => 'Riyadh',
                'description' => 'Blending contemporary and traditional style, this 960 m² private villa in Riyadh features a central courtyard, inspired by the oldest Islamic tradition in the region and designed in collaboration with our sister company in Beirut. We wanted the villa to have the sense of intimacy and seclusion that comes from being entirely inward-facing. Creating these large central spaces that act as both, a sanctuary and an inviting social space. With our use of natural tones, luxurious materials and textures throughout the villa, we have created a feeling of timeless, understated luxury.',
                'banner' => url('/images/projects/portfolio/private_villa_courtyard_living/banners/banner4.webp'),
                'thumbnail' => url('/images/projects/portfolio/private_villa_courtyard_living/thumbnails/works4.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/private_villa_courtyard_living/images/Rectangle 16.webp')
                ]),
                'client' => 'Private',
                'slug' => 'private-villa-courtyard-living',
                 'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Outdoor Haven Family Residence',
                'category' => 'Family Home',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2021,
                'location' => 'Riyadh',
                'description' => 'Privacy is key for this spectacular 3200 m² residence designed with an extensive outdoor area. To enjoy Riyadh’s weather for most of the year, the space planning of this villa brings the outdoor living areas into the spotlight. Seamless indoor to outdoor transitions, private family patios and large terraces have been designed to make the most of the spectacular views of Riyadh. Light and open spaces, and a combination of stone and timber, create a calm and restful atmosphere throughout the interiors.',
                'banner' => url('/images/projects/portfolio/the_outdoor_haven_family_residence/banners/banner5.webp'),
                'thumbnail' => url('/images/projects/portfolio/the_outdoor_haven_family_residence/thumbnails/works5.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/the_outdoor_haven_family_residence/images/Rectangle 16.webp')
                ]),
                'client' => 'Private',
                'slug' => 'the-outdoor-haven-family-residence',
                 'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tranquility Private Residence',
                'category' => 'Private Residence',
                'architects' => json_encode(['Zaher Bissar']),
                'year' => 2020,
                'location' => 'Riyadh',
                'description' => 'This 780 m² private residence in Riyadh was designed with a contemporary classic feel, with luxurious yet subtle design and the most refined materials. Our clients’ desire for a warm and inviting family atmosphere, combined with the aspiration to create beautiful, intimate spaces, was the driving force behind the design of this home.',
                'banner' => url('/images/projects/portfolio/tranquility_private_residence/banners/banner6.webp'),
                'thumbnail' => url('/images/projects/portfolio/tranquility_private_residence/thumbnails/works6.webp'),
                'images' => json_encode([
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 7.webp'),
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 113.webp'),
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 19.webp'),
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 114.webp'),
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 14.webp'),
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 15.webp'),
                    url('/images/projects/portfolio/tranquility_private_residence/images/Rectangle 16.webp')
                ]),
                'client' => 'Private',
                'slug' => 'tranquility-private-residence',
                 'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('portfolio_projects')->insert($projects);
    }
}