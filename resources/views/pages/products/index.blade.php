@extends('layouts.app')

@section('title', $title ?? 'All Products - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? 'Browse all our custom packaging products.')
@section('meta_keywords', $metaKeywords ?? 'custom boxes, packaging products')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-4">
                    ALL <span class="text-primary">PRODUCTS</span>
                </h1>
                <p class="text-light-muted text-lg max-w-2xl mx-auto">
                    Discover our complete range of custom packaging solutions. Premium quality boxes for every business need.
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
                        @if($product->is_featured)
                        <div class="absolute top-4 right-4 bg-primary text-light px-3 py-1 text-xs font-semibold tracking-wider">
                            FEATURED
                        </div>
                        @endif
                    </div>
                    @else
                    <div class="w-full h-64 bg-dark flex items-center justify-center relative">
                        <svg class="w-20 h-20 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        @if($product->is_featured)
                        <div class="absolute top-4 right-4 bg-primary text-light px-3 py-1 text-xs font-semibold tracking-wider">
                            FEATURED
                        </div>
                        @endif
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
            
            {{-- Pagination --}}
            @if(method_exists($products, 'links'))
            <div class="mt-12">
                {{ $products->links() }}
            </div>
            @endif
            @else
            <div class="text-center py-16">
                <svg class="w-24 h-24 text-dark-muted mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                <h3 class="font-display text-2xl text-dark mb-2">No Products Found</h3>
                <p class="text-dark-muted">Please add products from the admin panel.</p>
            </div>
            @endif
        </div>
    </section>
@endsection

