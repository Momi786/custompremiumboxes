@extends('layouts.app')

@section('title', $title ?? 'Featured Products - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? 'Discover our featured custom packaging products.')
@section('meta_keywords', $metaKeywords ?? 'featured products, best custom boxes')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="text-primary font-semibold tracking-widest text-sm mb-4 inline-block">FEATURED COLLECTION</span>
                <h1 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-4">
                    FEATURED <span class="text-primary">PRODUCTS</span>
                </h1>
                <p class="text-light-muted text-lg max-w-2xl mx-auto">
                    Discover our handpicked selection of premium custom packaging solutions. These featured products represent the best of our collection.
                </p>
            </div>
        </div>
    </section>

    {{-- Products Grid --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $index => $product)
                <a href="{{ route('products.show', $product->slug) }}" class="group bg-light-soft border-2 border-light-muted hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 4) * 100 }}">
                    @if($product->image)
                    <div class="w-full h-64 bg-light-soft overflow-hidden relative">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 right-4 bg-primary text-light px-3 py-1 text-xs font-semibold tracking-wider">
                            FEATURED
                        </div>
                    </div>
                    @else
                    <div class="w-full h-64 bg-dark flex items-center justify-center relative">
                        <svg class="w-20 h-20 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        <div class="absolute top-4 right-4 bg-primary text-light px-3 py-1 text-xs font-semibold tracking-wider">
                            FEATURED
                        </div>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                </svg>
                <h3 class="font-display text-2xl text-dark mb-2">No Featured Products</h3>
                <p class="text-dark-muted mb-6">Mark products as featured in the admin panel to see them here.</p>
                <a href="{{ route('products.index') }}" class="btn-primary">Browse All Products</a>
            </div>
            @endif
        </div>
    </section>
@endsection

