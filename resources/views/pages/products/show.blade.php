@extends('layouts.app')

@section('title', $title ?? $product->name . ' - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? Str::limit($product->short_description ?? $product->description ?? '', 155))
@section('meta_keywords', $metaKeywords ?? strtolower($product->name) . ', custom boxes, packaging')

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Product",
    "name": "{{ $product->name }}",
    "description": "{{ $product->short_description ?? $product->description ?? '' }}",
    @if($product->image_url)
    "image": "{{ $product->image_url }}",
    @endif
    @if($product->price)
    "offers": {
        "@@type": "Offer",
        "price": "{{ $product->price }}",
        "priceCurrency": "USD"
    },
    @endif
    "brand": {
        "@@type": "Brand",
        "name": "Custom Premium Boxes"
    },
    "category": "{{ $product->categories->pluck('name')->implode(', ') }}"
}
</script>
@endpush

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                {{-- Product Image --}}
                <div class="relative">
                    @if($product->image_url)
                    <div class="aspect-square bg-dark-soft rounded-lg overflow-hidden mb-4">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover" id="main-image">
                    </div>
                    @endif
                    
                    {{-- Gallery --}}
                    @if($product->gallery && count($product->gallery) > 0)
                    <div class="grid grid-cols-4 gap-4">
                        @foreach($product->gallery as $image)
                        @php
                            $galleryImageUrl = filter_var($image, FILTER_VALIDATE_URL) ? $image : \Illuminate\Support\Facades\Storage::disk('public')->url($image);
                        @endphp
                        <button onclick="changeImage('{{ $galleryImageUrl }}')" class="aspect-square bg-dark-soft rounded-lg overflow-hidden border-2 border-transparent hover:border-primary transition-colors">
                            <img src="{{ $galleryImageUrl }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        </button>
                        @endforeach
                    </div>
                    @endif
                </div>
                
                {{-- Product Info --}}
                <div>
                    @if($product->is_featured)
                    <span class="inline-block bg-primary text-light px-4 py-2 text-xs font-semibold tracking-wider mb-4">
                        FEATURED PRODUCT
                    </span>
                    @endif
                    
                    <h1 class="font-display text-4xl md:text-5xl text-light tracking-wide mb-6">
                        {{ strtoupper($product->name) }}
                    </h1>
                    
                    @if($product->short_description)
                    <p class="text-light-muted text-lg leading-relaxed mb-6">
                        {{ $product->short_description }}
                    </p>
                    @endif
                    
                    @if($product->price)
                    <div class="mb-6">
                        <span class="font-display text-3xl text-primary">${{ number_format($product->price, 2) }}</span>
                    </div>
                    @endif
                    
                    @if($product->sku)
                    <div class="mb-6">
                        <span class="text-light-muted text-sm">SKU: </span>
                        <span class="text-light font-mono">{{ $product->sku }}</span>
                    </div>
                    @endif
                    
                    {{-- Categories --}}
                    @if($product->categories->count() > 0)
                    <div class="mb-6">
                        <span class="text-light-muted text-sm block mb-2">Categories:</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach($product->categories as $category)
                            <a href="{{ route('categories.show', $category->slug) }}" class="bg-dark-soft text-light px-3 py-1 text-sm hover:bg-primary transition-colors">
                                {{ $category->name }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary">
                            Get Free Quote
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="tel:+18001234567" class="btn-outline-light">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Description Section --}}
    @if($product->description)
    <section class="py-16 bg-light">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-display text-3xl text-dark tracking-wide mb-8">PRODUCT <span class="text-primary">DETAILS</span></h2>
            <div class="prose prose-lg max-w-none text-dark-muted">
                {!! $product->description !!}
            </div>
        </div>
    </section>
    @endif

    {{-- Related Products --}}
    @if($relatedProducts->count() > 0)
    <section class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-display text-3xl text-dark tracking-wide mb-12 text-center">
                RELATED <span class="text-primary">PRODUCTS</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedProducts as $index => $relatedProduct)
                <a href="{{ route('products.show', $relatedProduct->slug) }}" class="group bg-light border-2 border-light-muted hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 3) * 100 }}">
                    @if($relatedProduct->image_url)
                    <div class="w-full h-48 bg-light-soft overflow-hidden">
                        <img src="{{ $relatedProduct->image_url }}" alt="{{ $relatedProduct->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    @endif
                    <div class="p-6">
                        <h3 class="font-display text-lg text-dark tracking-wider mb-2 group-hover:text-primary transition-colors">
                            {{ strtoupper($relatedProduct->name) }}
                        </h3>
                        @if($relatedProduct->short_description)
                        <p class="text-dark-muted text-sm mb-4 line-clamp-2">
                            {{ Str::limit($relatedProduct->short_description, 60) }}
                        </p>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection

@push('scripts')
<script>
function changeImage(src) {
    document.getElementById('main-image').src = src;
}
</script>
@endpush

