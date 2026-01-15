<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of all published blog posts.
     */
    public function index()
    {
        $posts = BlogPost::published()
            ->with('categories')
            ->orderBy('published_at', 'desc')
            ->orderBy('sort_order')
            ->paginate(12);

        $categories = BlogCategory::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('pages.blog.index', [
            'posts' => $posts,
            'categories' => $categories,
            'title' => 'Blog - Custom Premium Boxes',
            'metaDescription' => 'Read our latest blog posts about custom packaging, industry insights, and premium box solutions.',
            'metaKeywords' => 'blog, custom packaging, packaging tips, box design, packaging industry',
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Blog', 'url' => route('blog.index')],
            ],
        ]);
    }

    /**
     * Display the specified blog post.
     */
    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->published()
            ->with('categories')
            ->firstOrFail();

        // Increment views
        $post->incrementViews();

        // Get related posts from same categories
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($query) use ($post) {
                $query->whereIn('blog_categories.id', $post->categories->pluck('id'));
            })
            ->limit(6)
            ->inRandomOrder()
            ->get();

        // If no related posts, get latest posts
        if ($relatedPosts->isEmpty()) {
            $relatedPosts = BlogPost::published()
                ->where('id', '!=', $post->id)
                ->limit(6)
                ->orderBy('published_at', 'desc')
                ->get();
        }

        // SEO Meta
        $title = $post->meta_title ?: $post->title.' - Blog - Custom Premium Boxes';
        $metaDescription = $post->meta_description ?:
            Str::limit($post->excerpt ?? strip_tags($post->content), 155);
        $metaKeywords = $post->meta_keywords ?:
            strtolower($post->title).', blog, custom packaging, '.
            $post->categories->pluck('name')->implode(', ');

        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Blog', 'url' => route('blog.index')],
        ];

        // Add category breadcrumb if post has categories
        if ($post->categories->isNotEmpty()) {
            $firstCategory = $post->categories->first();
            $breadcrumbs[] = ['label' => $firstCategory->name, 'url' => route('blog.category', $firstCategory->slug)];
        }

        $breadcrumbs[] = ['label' => $post->title, 'url' => route('blog.show', $post->slug)];

        return view('pages.blog.show', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    /**
     * Display blog posts for a specific category.
     */
    public function category($slug)
    {
        $category = BlogCategory::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $posts = BlogPost::published()
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('blog_categories.id', $category->id);
            })
            ->with('categories')
            ->orderBy('published_at', 'desc')
            ->orderBy('sort_order')
            ->paginate(12);

        $categories = BlogCategory::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        // SEO Meta
        $title = $category->meta_title ?: $category->name.' - Blog - Custom Premium Boxes';
        $metaDescription = $category->meta_description ?:
            'Read blog posts about '.$category->name.'. '.Str::limit($category->description ?? '', 120);
        $metaKeywords = $category->meta_keywords ?:
            strtolower($category->name).', blog, custom packaging, '.$category->name;

        return view('pages.blog.category', [
            'category' => $category,
            'posts' => $posts,
            'categories' => $categories,
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'breadcrumbs' => [
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Blog', 'url' => route('blog.index')],
                ['label' => $category->name, 'url' => route('blog.category', $category->slug)],
            ],
        ]);
    }
}
