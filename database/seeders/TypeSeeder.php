<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['title' => 'Design','slug' => 'design'],
            ['title' => 'Houses','slug' => 'houses'],
            ['title' => 'Interior','slug' => 'interior'],
            ['title' => 'Living','slug' => 'living']
        ];
        // Insert categories into the database
        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
