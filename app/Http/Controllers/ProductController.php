<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Item::with('category');

        if ($request->has('price')) {
            $price = $request->input('price');

            if ($price == '<$45') {
                $query->where('price', '<', 45);
            } elseif ($price == '<$69') {
                $query->where('price', '<', 69);
            } elseif ($price == '>$99') {
                $query->where('price', '>', 99);
            }
        }

        $parts = $query->paginate(5);

        return view('parts', compact('parts'));
    }

    public function show($id)
    {
        $part = Item::with('category')->findOrFail($id);

        return view('single-item', compact('part'));
    }
}
