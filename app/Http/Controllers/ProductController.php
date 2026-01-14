<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of all active products.
     */
    public function index()
    {
        $products = Product::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(24);

        return view('pages.products.index', [
            'products' => $products,
            'title' => 'All Products - Custom Premium Boxes',
            'metaDescription' => 'Browse all our custom packaging products. Premium quality boxes for every business need.',
            'metaKeywords' => 'custom boxes, packaging products, custom packaging, premium boxes',
        ]);
    }

    /**
     * Display featured products.
     */
    public function featured()
    {
        $products = Product::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('pages.products.featured', [
            'products' => $products,
            'title' => 'Featured Products - Custom Premium Boxes',
            'metaDescription' => 'Discover our featured custom packaging products. Premium quality boxes handpicked for excellence.',
            'metaKeywords' => 'featured products, best custom boxes, premium packaging, top boxes',
        ]);
    }

    /**
     * Display the specified product.
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_active', true)
            ->with('categories')
            ->firstOrFail();

        // Get related products from same categories
        $relatedProducts = Product::where('is_active', true)
            ->where('id', '!=', $product->id)
            ->whereHas('categories', function ($query) use ($product) {
                $query->whereIn('categories.id', $product->categories->pluck('id'));
            })
            ->limit(6)
            ->inRandomOrder()
            ->get();

        // SEO Meta
        $title = $product->meta_title ?: $product->name . ' - Custom Premium Boxes';
        $metaDescription = $product->meta_description ?: 
            Str::limit($product->short_description ?? $product->description ?? '', 155);
        $metaKeywords = $product->meta_keywords ?: 
            strtolower($product->name) . ', custom boxes, packaging, ' . 
            $product->categories->pluck('name')->implode(', ');

        return view('pages.products.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
        ]);
    }
}
