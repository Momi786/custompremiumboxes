<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of all active categories.
     */
    public function index()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('pages.categories.index', [
            'categories' => $categories,
            'title' => 'All Categories - Custom Premium Boxes',
            'metaDescription' => 'Browse all our custom packaging categories. Find the perfect box solution for your business needs.',
            'metaKeywords' => 'custom boxes, packaging categories, box types, custom packaging',
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Categories', 'url' => route('categories.index')],
            ],
        ]);
    }

    /**
     * Display the specified category with its products.
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('is_active', true)
            ->with(['products' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('name');
            }])
            ->firstOrFail();

        // SEO Meta
        $title = $category->meta_title ?: $category->name.' - Custom Premium Boxes';
        $metaDescription = $category->meta_description ?:
            'Browse '.$category->name.' products. '.Str::limit($category->description ?? '', 120);
        $metaKeywords = $category->meta_keywords ?:
            strtolower($category->name).', custom boxes, packaging, '.$category->name.' boxes';

        return view('pages.categories.show', [
            'category' => $category,
            'products' => $category->products,
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Categories', 'url' => route('categories.index')],
                ['label' => $category->name, 'url' => route('categories.show', $category->slug)],
            ],
        ]);
    }
}
