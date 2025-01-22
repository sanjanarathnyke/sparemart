<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Suspension', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tires and Wheels', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Performance Parts', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lights', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Engine Parts', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('categories')->insert($categories);

    }
}
