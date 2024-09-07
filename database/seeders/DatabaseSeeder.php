<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TypeSeeder::class,
            PortfolioProjectSeeder::class,
            CollaborationProjectSeeder::class,
            HomepageBannerSeeder::class,
            PortfolioPageBannerSeeder::class,
            CollaborationPageBannerSeeder::class,
            SectionStylesSeeder::class,
            EditorialCarouselSectionSeeder::class,
            SectionServicesSeeder::class,
            SectionBehindTheBrandAccordionSeeder::class,
            SectionBehindTheBrandImageSeeder::class,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
