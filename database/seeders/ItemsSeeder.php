<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            // Suspension Items
            ['name' => 'Shock Absorber', 'price' => 120.50, 'description' => 'High-quality shock absorber.', 'category_id' => 1, 'image' => 'assets/images/Itemimages/sport-shoks.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Strut Assembly', 'price' => 250.00, 'description' => 'Complete strut assembly.', 'category_id' => 1, 'image' => 'assets/images/Itemimages/Strut_Assembly.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Control Arm', 'price' => 75.99, 'description' => 'Durable control arm.', 'category_id' => 1, 'image' => 'assets/images/Itemimages/Control_Arm.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Coil Spring', 'price' => 85.00, 'description' => 'Premium coil spring.', 'category_id' => 1, 'image' => 'assets/images/Itemimages/Coil_Spring.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stabilizer Bar', 'price' => 100.00, 'description' => 'Reliable stabilizer bar.', 'category_id' => 1, 'image' => 'assets/images/Itemimages/stabilizebar.png', 'created_at' => now(), 'updated_at' => now()],
    
            // Tires and Wheels Items
            ['name' => 'All-Terrain Tire', 'price' => 150.00, 'description' => 'Durable all-terrain tire.', 'category_id' => 2, 'image' => 'assets/images/Itemimages/All-Terrain_Tire.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Steel Wheel', 'price' => 80.00, 'description' => 'Heavy-duty steel wheel.', 'category_id' => 2, 'image' => 'assets/images/Itemimages/steel-wheel.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Performance Tire', 'price' => 200.00, 'description' => 'High-performance tire.', 'category_id' => 2, 'image' => 'assets/images/Itemimages/Performance_Tire.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alloy Wheel', 'price' => 120.00, 'description' => 'Stylish alloy wheel.', 'category_id' => 2, 'image' => 'assets/images/Itemimages/Alloy_Wheel.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spare Tire', 'price' => 100.00, 'description' => 'Compact spare tire.', 'category_id' => 2, 'image' => 'assets/images/Itemimages/Spare_Tire.png', 'created_at' => now(), 'updated_at' => now()],
    
            // Performance Parts Items
            ['name' => 'Cold Air Intake', 'price' => 300.00, 'description' => 'Improves engine performance.', 'category_id' => 3, 'image' => 'assets/images/Itemimages/Cold-Air_Intake.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Turbocharger', 'price' => 700.00, 'description' => 'Boosts engine power.', 'category_id' => 3, 'image' => 'assets/images/Itemimages/TurbochargerExhaust System.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Exhaust System', 'price' => 400.00, 'description' => 'Enhances exhaust flow.', 'category_id' => 3, 'image' => 'assets/images/Itemimages/exhustpng.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ignition Coil', 'price' => 150.00, 'description' => 'Efficient ignition coil.', 'category_id' => 3, 'image' => 'assets/images/Itemimages/Ignition_Coil.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Throttle Body', 'price' => 250.00, 'description' => 'High-performance throttle body.', 'category_id' => 3, 'image' => 'assets/images/Itemimages/throttle.png', 'created_at' => now(), 'updated_at' => now()],
    
            // Lights Items
            ['name' => 'LED Headlight', 'price' => 100.00, 'description' => 'Bright LED headlight.', 'category_id' => 4, 'image' => 'assets/images/Itemimages/LED_Headlight.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fog Lights', 'price' => 70.00, 'description' => 'Durable fog lights.', 'category_id' => 4, 'image' => 'assets/images/Itemimages/Fog_Lights.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Taillight Assembly', 'price' => 90.00, 'description' => 'Complete taillight assembly.', 'category_id' => 4, 'image' => 'assets/images/Itemimages/Taillight_Assembly.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Halogen Bulbs', 'price' => 25.00, 'description' => 'Reliable halogen bulbs.', 'category_id' => 4, 'image' => 'assets/images/Itemimages/Halogen_Bulbs.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Light Bar', 'price' => 150.00, 'description' => 'Powerful light bar.', 'category_id' => 4, 'image' => 'assets/images/Itemimages/light_bar.png', 'created_at' => now(), 'updated_at' => now()],
    
            // Engine Parts Items
            ['name' => 'Oil Filter', 'price' => 30.00, 'description' => 'Efficient oil filter.', 'category_id' => 5, 'image' => 'assets/images/Itemimages/oil_filter.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spark Plug', 'price' => 10.00, 'description' => 'Reliable spark plug.', 'category_id' => 5, 'image' => 'assets/images/Itemimages/spark_plug.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Timing Belt', 'price' => 120.00, 'description' => 'Durable timing belt.', 'category_id' => 5, 'image' => 'assets/images/Itemimages/t-belt.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fuel Injector', 'price' => 200.00, 'description' => 'High-quality fuel injector.', 'category_id' => 5, 'image' => 'assets/images/Itemimages/injector.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cylinder Head', 'price' => 600.00, 'description' => 'Precision cylinder head.', 'category_id' => 5, 'image' => 'assets/images/Itemimages/cylinder_head.png', 'created_at' => now(), 'updated_at' => now()],
        ];
    
        DB::table('items')->insert($items);
    }
    
}
