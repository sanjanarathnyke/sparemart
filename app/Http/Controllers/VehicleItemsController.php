<?php

namespace App\Http\Controllers;

use App\Models\Engine;
use App\Models\Light;
use App\Models\Performance;
use App\Models\Suspension;
use App\Models\Tire;

class VehicleItemsController extends Controller
{
    public function getSuspensionItems()
    {
        $suspensionItems = Suspension::with('category')->paginate(5);

        // dd($suspensionCount);

        return view('suspension', compact('suspensionItems'));
    }

    public function getTires()
    {
        $tires = Tire::with('category')->paginate(5);
        return view('tires', compact('tires'));
    }

    public function getperformanceItems()
    {
        $performanceItems = Performance::with('category')->paginate(5);
        return view('performance-parts', compact('performanceItems'));
    }

    public function getlights()
    {
        $light = Light::with('category')->paginate(5);
        return view('lightning', compact('light'));
    }

    public function getengine()
    {
        $engine = Engine::with('category')->paginate(5);
        return view('engine-parts', compact('engine'));
    }
}
