<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LightSeeder extends Seeder
{

    public function run(): void
    {
        $lights = [
            ['name' => 'LED Headlights', 'price' => 200.00, 'category_id' => 1, 'image' => 'assets/images/Lights/ledhead.png'],
            ['name' => 'Halogen Headlights', 'price' => 100.00, 'category_id' => 1, 'image' => 'assets/images/Lights/halagonlamp.png'],
            ['name' => 'HID Headlights', 'price' => 250.00, 'category_id' => 1, 'image' => 'assets/images/Lights/hidlights.png'],
            ['name' => 'LED Taillights', 'price' => 180.00, 'category_id' => 2, 'image' => 'assets/images/Lights/ledtaillight.png'],
            ['name' => 'Fog Lights', 'price' => 120.00, 'category_id' => 3, 'image' => 'assets/images/Lights/fog.png'],
            ['name' => 'DRL (Daytime Running Lights)', 'price' => 160.00, 'category_id' => 2, 'image' => 'assets/images/Lights/dlr.png'],
            ['name' => 'Underbody Neon Lights', 'price' => 300.00, 'category_id' => 4, 'image' => 'assets/images/Lights/underbodyneon.png'],
            ['name' => 'Cabin LED Lights', 'price' => 80.00, 'category_id' => 3, 'image' => 'assets/images/Lights/cabin.png'],
            ['name' => 'Brake Lights', 'price' => 90.00, 'category_id' => 2, 'image' => 'assets/images/Lights/breaklight.png'],
            ['name' => 'Turn Signal Lights', 'price' => 70.00, 'category_id' => 3, 'image' => 'assets/images/Lights/breaklight.png'],
        ];

        DB::table('lights')->insert($lights);
    }
}
