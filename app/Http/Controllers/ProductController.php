<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $parts = Item::with('category')->get();
        
        return view('parts',compact('parts'));
    }
}
