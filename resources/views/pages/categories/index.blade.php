@extends('layouts.app')

@section('title', $title ?? 'All Categories - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? 'Browse all our custom packaging categories.')
@section('meta_keywords', $metaKeywords ?? 'custom boxes, packaging categories')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-4">
                    ALL <span class="text-primary">CATEGORIES</span>
                </h1>
                <p class="text-light-muted text-lg max-w-2xl mx-auto">
                    Explore our complete range of custom packaging categories. Find the perfect solution for your business needs.
                </p>
            </div>
        </div>
    </section>

    {{-- Categories Grid --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($categories->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($categories as $index => $category)
                <a href="{{ route('categories.show', $category->slug) }}" class="group bg-light-soft border-2 border-light-muted hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 4) * 100 }}">
                    @if($category->image)
                    <div class="w-full h-48 bg-light-soft overflow-hidden">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    @else
                    <div class="w-full h-48 bg-dark flex items-center justify-center">
                        <svg class="w-20 h-20 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    @endif
                    <div class="p-6">
                        <h3 class="font-display text-xl text-dark tracking-wider mb-2 group-hover:text-primary transition-colors">
                            {{ strtoupper($category->name) }}
                        </h3>
                        @if($category->description)
                        <p class="text-dark-muted text-sm mb-4 line-clamp-2">
                            {{ Str::limit($category->description, 100) }}
                        </p>
                        @endif
                        <div class="flex items-center text-primary text-sm font-semibold">
                            <span>Explore</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            @else
            <div class="text-center py-16">
                <svg class="w-24 h-24 text-dark-muted mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                <h3 class="font-display text-2xl text-dark mb-2">No Categories Found</h3>
                <p class="text-dark-muted">Please add categories from the admin panel.</p>
            </div>
            @endif
        </div>
    </section>
@endsection

