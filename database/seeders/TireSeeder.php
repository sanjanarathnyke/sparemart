<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tires = [
            ['name' => 'Michelin Pilot Sport', 'price' => 150.00, 'category_id' => 2, 'image' => 'assets\images\Tires\mechlin.png'],
            ['name' => 'Pirelli P Zero', 'price' => 200.00, 'category_id' => 2, 'image' => 'assets\images\Tires\pirelp.png'],
            ['name' => 'Goodyear Eagle F1', 'price' => 180.00, 'category_id' => 2, 'image' => 'assets\images\Tires\goodyear.png'],
            ['name' => 'Bridgestone Potenza', 'price' => 170.00, 'category_id' => 2, 'image' => 'assets\images\Tires\bridgestone.png'],
            ['name' => 'Continental ExtremeContact', 'price' => 160.00, 'category_id' => 2, 'image' => 'assets\images\Tires\continentel.png'],
            ['name' => 'Hankook Ventus V12', 'price' => 140.00, 'category_id' => 2, 'image' => 'assets\images\Tires\hankook.png'],
            ['name' => 'Yokohama Advan Sport', 'price' => 185.00, 'category_id' => 2, 'image' => 'assets\images\Tires\yokohama.png'],
            ['name' => 'Falken Azenis', 'price' => 130.00, 'category_id' => 2, 'image' => 'assets\images\Tires\falken.png'],
            ['name' => 'Toyo Proxes', 'price' => 155.00, 'category_id' => 2, 'image' => 'assets\images\Tires\toyoproxes.png'],
        ];
        DB::table('tires')->insert($tires);
    }
}
