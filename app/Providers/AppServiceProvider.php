<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $cart = session('cart', []);
            $itemCount = array_sum(array_column($cart, 'quantity')) ?: count($cart); // Fallback if 'quantity' not present
            $view->with('cartItemCount', $itemCount);
        });
    }
}
