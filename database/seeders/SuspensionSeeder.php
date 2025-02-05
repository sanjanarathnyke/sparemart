<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuspensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Shock Absorber', 'price' => 120.50, 'category_id' => 1, 'image' => 'assets\images\Suspensions\sport-shoks.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Control Arm', 'price' => 75.99, 'category_id' => 1, 'image' => 'assets\images\Suspensions\control_arm.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Coil Spring', 'price' => 85.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\Coil_Spring.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stabilizer Bar', 'price' => 100.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\Stabilizer_Bar.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ball Joint', 'price' => 60.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\balljoit.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wheel Hub Assembly', 'price' => 150.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\wheelhub.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tie Rod End', 'price' => 45.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\tierod.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sway Bar Link', 'price' => 35.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\swaybar.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Leaf Spring', 'price' => 200.00, 'category_id' => 1, 'image' => 'assets\images\Suspensions\leafspring.png', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('suspension')->insert($items);
    }
}
