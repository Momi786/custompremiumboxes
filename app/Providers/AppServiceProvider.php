<?php

namespace App\Providers;

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
        // Share active categories with navigation and footer
        // Check if tables exist to prevent errors during initial setup
        try {
            $categories = \App\Models\Category::where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get();

            // Share featured products with navigation
            $featuredProducts = \App\Models\Product::where('is_active', true)
                ->where('is_featured', true)
                ->orderBy('sort_order')
                ->orderBy('name')
                ->limit(6)
                ->get();

            view()->composer(['partials.navigation', 'partials.footer'], function ($view) use ($categories, $featuredProducts) {
                $view->with('categories', $categories);
                $view->with('featuredProducts', $featuredProducts);
            });
        } catch (\Illuminate\Database\QueryException $e) {
            // Tables don't exist yet - provide empty collections
            view()->composer(['partials.navigation', 'partials.footer'], function ($view) {
                $view->with('categories', collect());
                $view->with('featuredProducts', collect());
            });
        }
    }
}
