<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Home Page
Route::get('/', function () {
    // Get featured categories and products for homepage
    $featuredCategories = \App\Models\Category::where('is_active', true)
        ->where('is_featured', true)
        ->orderBy('sort_order')
        ->orderBy('name')
        ->limit(8)
        ->get();

    $featuredProducts = \App\Models\Product::where('is_active', true)
        ->where('is_featured', true)
        ->orderBy('sort_order')
        ->orderBy('name')
        ->limit(6)
        ->get();

    // Get trusted brands for slider
    $trustedBrands = \App\Models\TrustedBrand::where('is_active', true)
        ->orderBy('sort_order')
        ->orderBy('name')
        ->get();

    return view('pages.home', [
        'featuredCategories' => $featuredCategories,
        'featuredProducts' => $featuredProducts,
        'trustedBrands' => $trustedBrands,
    ]);
})->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Why Custom Premium Boxes Page
Route::get('/why-custom-premium-boxes', function () {
    return view('pages.why-custom-premium-boxes');
})->name('why-custom-premium-boxes');

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Categories Routes
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{slug}', [CategoryController::class, 'show'])->name('show');
});

// Products Routes
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/featured', [ProductController::class, 'featured'])->name('featured');
    Route::get('/{slug}', [ProductController::class, 'show'])->name('show');
});

// Blog Routes
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/category/{slug}', [BlogController::class, 'category'])->name('category');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

// Legacy product routes (for backward compatibility - redirect to new dynamic routes)
Route::prefix('products')->group(function () {
    Route::get('/mailer-boxes', function () {
        $product = \App\Models\Product::where('slug', 'mailer-boxes')->first();
        if ($product) {
            return redirect()->route('products.show', $product->slug, 301);
        }

        return redirect()->route('products.index', 301);
    });

    Route::get('/tuck-top-boxes', function () {
        $product = \App\Models\Product::where('slug', 'tuck-top-boxes')->first();
        if ($product) {
            return redirect()->route('products.show', $product->slug, 301);
        }

        return redirect()->route('products.index', 301);
    });

    Route::get('/reverse-tuck-boxes', function () {
        $product = \App\Models\Product::where('slug', 'reverse-tuck-boxes')->first();
        if ($product) {
            return redirect()->route('products.show', $product->slug, 301);
        }

        return redirect()->route('products.index', 301);
    });

    Route::get('/bakery-boxes', function () {
        $product = \App\Models\Product::where('slug', 'bakery-boxes')->first();
        if ($product) {
            return redirect()->route('products.show', $product->slug, 301);
        }

        return redirect()->route('products.index', 301);
    });

    Route::get('/rigid-boxes', function () {
        $product = \App\Models\Product::where('slug', 'rigid-boxes')->first();
        if ($product) {
            return redirect()->route('products.show', $product->slug, 301);
        }

        return redirect()->route('products.index', 301);
    });

    Route::get('/chocolate-boxes', function () {
        $product = \App\Models\Product::where('slug', 'chocolate-boxes')->first();
        if ($product) {
            return redirect()->route('products.show', $product->slug, 301);
        }

        return redirect()->route('products.index', 301);
    });
});

// Sitemap for SEO
Route::get('/sitemap.xml', function () {
    $pages = [
        ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['url' => route('why-custom-premium-boxes'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => route('contact'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => route('categories.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['url' => route('products.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['url' => route('products.featured'), 'priority' => '0.9', 'changefreq' => 'weekly'],
    ];

    // Add all active categories
    $categories = \App\Models\Category::where('is_active', true)->get();
    foreach ($categories as $category) {
        $pages[] = [
            'url' => route('categories.show', $category->slug),
            'priority' => '0.8',
            'changefreq' => 'weekly',
        ];
    }

    // Add all active products
    $products = \App\Models\Product::where('is_active', true)->get();
    foreach ($products as $product) {
        $pages[] = [
            'url' => route('products.show', $product->slug),
            'priority' => '0.9',
            'changefreq' => 'weekly',
        ];
    }

    // Add blog index
    $pages[] = [
        'url' => route('blog.index'),
        'priority' => '0.8',
        'changefreq' => 'weekly',
    ];

    // Add all active blog categories
    $blogCategories = \App\Models\BlogCategory::where('is_active', true)->get();
    foreach ($blogCategories as $category) {
        $pages[] = [
            'url' => route('blog.category', $category->slug),
            'priority' => '0.7',
            'changefreq' => 'weekly',
        ];
    }

    // Add all published blog posts
    $blogPosts = \App\Models\BlogPost::published()->get();
    foreach ($blogPosts as $post) {
        $pages[] = [
            'url' => route('blog.show', $post->slug),
            'priority' => '0.8',
            'changefreq' => 'monthly',
        ];
    }

    return response()->view('sitemap', ['pages' => $pages])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
