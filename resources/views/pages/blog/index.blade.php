@extends('layouts.app')

@section('title', $title ?? 'Blog - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? 'Read our latest blog posts about custom packaging.')
@section('meta_keywords', $metaKeywords ?? 'blog, custom packaging, packaging tips')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-4">
                    OUR <span class="text-primary">BLOG</span>
                </h1>
                <p class="text-light-muted text-lg max-w-2xl mx-auto">
                    Stay updated with the latest insights, tips, and trends in custom packaging and premium box solutions.
                </p>
            </div>
        </div>
    </section>

    {{-- Blog Content --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 gap-8">
                {{-- Main Content --}}
                <div class="lg:col-span-3">
                    @if($posts->count() > 0)
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        @foreach($posts as $index => $post)
                        <article class="bg-light-soft border-2 border-light-muted hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 2) * 100 }}">
                            <a href="{{ route('blog.show', $post->slug) }}" class="block">
                                @if($post->featured_image_url)
                                <div class="w-full h-48 bg-light-soft overflow-hidden">
                                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                </div>
                                @else
                                <div class="w-full h-48 bg-dark flex items-center justify-center">
                                    <svg class="w-16 h-16 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                    </svg>
                                </div>
                                @endif
                                <div class="p-6">
                                    @if($post->categories->count() > 0)
                                    <div class="flex flex-wrap gap-2 mb-3">
                                        @foreach($post->categories->take(2) as $category)
                                        <span class="bg-primary/10 text-primary px-3 py-1 text-xs font-semibold">
                                            {{ $category->name }}
                                        </span>
                                        @endforeach
                                    </div>
                                    @endif
                                    
                                    <h2 class="font-display text-xl text-dark tracking-wider mb-2 hover:text-primary transition-colors line-clamp-2">
                                        {{ $post->title }}
                                    </h2>
                                    
                                    @if($post->excerpt)
                                    <p class="text-dark-muted text-sm mb-4 line-clamp-3">
                                        {{ $post->excerpt }}
                                    </p>
                                    @endif
                                    
                                    <div class="flex items-center justify-between text-sm text-dark-muted">
                                        @if($post->published_at)
                                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                                        @endif
                                        @if($post->author_name)
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                            {{ $post->author_name }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </article>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    @if($posts->hasPages())
                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>
                    @endif
                    @else
                    <div class="text-center py-16">
                        <svg class="w-24 h-24 text-dark-muted mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        <h3 class="font-display text-2xl text-dark mb-2">No Blog Posts Found</h3>
                        <p class="text-dark-muted">Check back soon for new content!</p>
                    </div>
                    @endif
                </div>

                {{-- Sidebar --}}
                <aside class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">
                        {{-- Categories --}}
                        @if($categories->count() > 0)
                        <div class="bg-light-soft border-2 border-light-muted p-6">
                            <h3 class="font-display text-lg text-dark tracking-wider mb-4">CATEGORIES</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="{{ route('blog.index') }}" class="text-dark-muted hover:text-primary transition-colors {{ !request()->routeIs('blog.category') ? 'font-semibold text-primary' : '' }}">
                                        All Posts
                                    </a>
                                </li>
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('blog.category', $category->slug) }}" class="text-dark-muted hover:text-primary transition-colors {{ request()->routeIs('blog.category') && request()->route('slug') === $category->slug ? 'font-semibold text-primary' : '' }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

