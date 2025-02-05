<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Models\Performance;
use App\Models\Suspension;
use App\Models\Tire;

class VehicleItemsController extends Controller
{
    public function getSuspensionItems()
    {
        $suspensionItems = Suspension::with('category')->get();
        $suspensionCount = $suspensionItems->count();

        // dd($suspensionCount);

        return view('suspension', compact('suspensionItems', 'suspensionCount'));
    }

    public function getTires()
    {
        $tires = Tire::with('category')->get();
        return view('tires', compact('tires'));
    }

    public function getperformanceItems()
    {
        $performanceItems = Performance::with('category')->get();
        return view('performance-parts', compact('performanceItems'));
    }


}
