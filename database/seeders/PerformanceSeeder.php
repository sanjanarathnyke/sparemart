<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $performanceParts = [

            ['name' => 'Rear Spoiler', 'price' => 300.00, 'category_id' => 3, 'image' => 'assets\images\performance\spoiler.png'],
            ['name' => 'Side Skirts', 'price' => 250.00, 'category_id' => 3, 'image' => 'assets\images\performance\sideskirt.png'],
            ['name' => 'Bucket Seats', 'price' => 400.00, 'category_id' => 3, 'image' => 'assets\images\performance\seats.png'],
            ['name' => 'Front Lip', 'price' => 200.00, 'category_id' => 3, 'image' => 'assets\images\performance\frontlip.png'],
            ['name' => 'Widebody Kit', 'price' => 1200.00, 'category_id' => 3, 'image' => 'assets\images\performance\bodykit.png'],
            ['name' => 'Cold Air Intake', 'price' => 350.00, 'category_id' => 3, 'image' => 'assets\images\performance\airintake.png'],
            ['name' => 'Performance Exhaust', 'price' => 600.00, 'category_id' => 3, 'image' => 'assets\images\performance\exhaust.png'],
            ['name' => 'Strut Bar', 'price' => 150.00, 'category_id' => 3, 'image' => 'assets\images\performance\strutbar.png'],
            ['name' => 'Racing Steering Wheel', 'price' => 280.00, 'category_id' => 3, 'image' => 'assets\images\performance\steeringwhell.png'],
            ['name' => 'Carbon Fiber Hood', 'price' => 1000.00, 'category_id' => 3, 'image' => 'assets\images\performance\fiberhood.png'],
        ];

        DB::table('performance')->insert($performanceParts);
    }
}
