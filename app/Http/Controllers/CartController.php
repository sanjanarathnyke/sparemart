<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);


        if (isset($cart[$request->id])) {
            $cart[$request->id];
        } else {

            $cart[$request->id] = [
                "name" => $request->name,
                "price" => $request->price,
                "image" => $request->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart!');
    }


    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);


        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
        }


        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item removed from cart!');
    }

    // public function displayConfirm()
    // {
    //     $cart = session()->get('cart', []);
    //     // dd($cart);
    //     return view('confirm');
    // }
}
