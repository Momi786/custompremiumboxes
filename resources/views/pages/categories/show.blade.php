@extends('layouts.app')

@section('title', $title ?? $category->name . ' - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? Str::limit($category->description ?? '', 155))
@section('meta_keywords', $metaKeywords ?? strtolower($category->name) . ', custom boxes, packaging')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-light-muted text-sm mb-6">
                        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                        <span>/</span>
                        <a href="{{ route('categories.index') }}" class="hover:text-primary transition-colors">Categories</a>
                        <span>/</span>
                        <span class="text-light">{{ $category->name }}</span>
                    </nav>
                    <h1 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-6">
                        {{ strtoupper($category->name) }}
                    </h1>
                    @if($category->description)
                    <p class="text-light-muted text-lg leading-relaxed mb-8">
                        {{ $category->description }}
                    </p>
                    @endif
                </div>
                @if($category->image)
                <div class="relative">
                    <div class="aspect-square bg-dark-soft rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full h-full object-cover">
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Products Grid --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
                <h2 class="font-display text-3xl text-dark tracking-wide">
                    PRODUCTS IN THIS <span class="text-primary">CATEGORY</span>
                </h2>
                <span class="text-dark-muted">{{ $products->count() }} {{ Str::plural('product', $products->count()) }}</span>
            </div>
            
            @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $index => $product)
                <a href="{{ route('products.show', $product->slug) }}" class="group bg-light-soft border-2 border-light-muted hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 4) * 100 }}">
                    @if($product->image)
                    <div class="w-full h-64 bg-light-soft overflow-hidden">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    @else
                    <div class="w-full h-64 bg-dark flex items-center justify-center">
                        <svg class="w-20 h-20 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    @endif
                    <div class="p-6">
                        <h3 class="font-display text-lg text-dark tracking-wider mb-2 group-hover:text-primary transition-colors">
                            {{ strtoupper($product->name) }}
                        </h3>
                        @if($product->short_description)
                        <p class="text-dark-muted text-sm mb-4 line-clamp-2">
                            {{ Str::limit($product->short_description, 80) }}
                        </p>
                        @endif
                        @if($product->price)
                        <p class="text-primary font-semibold mb-4">${{ number_format($product->price, 2) }}</p>
                        @endif
                        <div class="flex items-center text-primary text-sm font-semibold">
                            <span>View Details</span>
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
                <h3 class="font-display text-2xl text-dark mb-2">No Products in This Category</h3>
                <p class="text-dark-muted mb-6">Check back soon for new products.</p>
                <a href="{{ route('products.index') }}" class="btn-primary">Browse All Products</a>
            </div>
            @endif
        </div>
    </section>
@endsection

