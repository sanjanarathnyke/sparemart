<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;

class ActiveCustomerController extends Controller
{
    public function displayConfirm()
    {
        $cart = session()->get('cart', []);
        // dd($cart);
        return view('confirm');
    }

    public function storeSubscribers(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // (Optional) If the form submits updated quantities, update the session cart
        if ($request->has('quantities')) {
            foreach ($request->input('quantities') as $key => $qty) {
                if (isset($cart[$key])) {
                    $cart[$key]['quantity'] = (int) $qty;
                }
            }
            session()->put('cart', $cart); // Save updated cart to session
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
        ]);

        $subscriber = Subscribers::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile_no' => $validated['mobile'],
        ]);

        // Calculate total
        $total = 0;
        foreach ($cart as $item) {
            $total += ($item['price'] ?? 0) * ($item['quantity'] ?? 1);
        }

        return view('layouts.invoice', [
            'subscriber' => $subscriber,
            'cart' => $cart,
            'total' => $total,
        ])->with('success', 'Thank you for your order!');
    }
}
