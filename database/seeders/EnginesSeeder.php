<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnginesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $engines = [
            ['name' => 'V8 Engine', 'price' => 1200.00, 'category_id' => 5, 'image' => 'assets/images/Engines/v8.png'],
            ['name' => 'V6 Engine', 'price' => 1000.00, 'category_id' => 5, 'image' => 'assets/images/Engines/v6.png'],
            ['name' => 'Inline 4 Engine', 'price' => 800.00, 'category_id' => 5, 'image' => 'assets/images/Engines/inline4.png'],
            ['name' => 'Rotary Engine', 'price' => 1500.00, 'category_id' => 5, 'image' => 'assets/images/Engines/rotary.png'],
            ['name' => 'Electric Motor', 'price' => 2000.00, 'category_id' => 5, 'image' => 'assets/images/Engines/electricmotor.png'],
            ['name' => 'Hybrid Engine', 'price' => 1800.00, 'category_id' => 5, 'image' => 'assets/images/Engines/hybrid.png'],
            ['name' => 'Diesel Engine', 'price' => 1300.00, 'category_id' => 5, 'image' => 'assets/images/Engines/diesel.png'],
            ['name' => 'Turbocharged Engine', 'price' => 1700.00, 'category_id' => 5, 'image' => 'assets/images/Engines/turbocharged.png'],
            ['name' => 'Supercharged Engine', 'price' => 1600.00, 'category_id' => 5, 'image' => 'assets/images/Engines/supercharged.png'],
            ['name' => 'Boxer Engine', 'price' => 1400.00, 'category_id' => 5, 'image' => 'assets/images/Engines/boxer.png'],
        ];


        DB::table('engines')->insert($engines);
    }
}
