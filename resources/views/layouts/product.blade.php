@extends('layouts.app')

@section('title', $title . ' - Custom Premium Boxes')
@section('meta_description', $metaDescription)
@section('meta_keywords', $metaKeywords)

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Product",
    "name": "{{ $title }}",
    "description": "{{ $metaDescription }}",
    "brand": {
        "@@type": "Brand",
        "name": "Custom Premium Boxes"
    },
    "category": "Packaging"
}
</script>
@endpush

@section('content')
    {{-- Hero Section --}}
    <section class="bg-dark py-20 lg:py-32 relative overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 right-10 w-64 h-64 border border-light animate-rotate-slow"></div>
            <div class="absolute bottom-10 left-10 w-48 h-48 border border-light animate-rotate-slow" style="animation-direction: reverse;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Content --}}
                <div class="text-center lg:text-left">
                    <nav class="mb-6 opacity-0 animate-fade-in" aria-label="Breadcrumb">
                        <ol class="flex items-center justify-center lg:justify-start space-x-2 text-sm">
                            <li><a href="{{ route('home') }}" class="text-light-muted hover:text-primary transition-colors">Home</a></li>
                            <li><span class="text-light-muted">/</span></li>
                            <li><span class="text-primary">{{ $title }}</span></li>
                        </ol>
                    </nav>
                    
                    <span class="inline-block text-primary font-semibold tracking-widest text-sm mb-4 opacity-0 animate-fade-in animation-delay-100">
                        {{ $subtitle }}
                    </span>
                    <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-light tracking-wide leading-none mb-6 opacity-0 animate-slide-up animation-delay-200">
                        {{ $title }}
                    </h1>
                    <p class="text-light-muted text-lg md:text-xl max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed opacity-0 animate-slide-up animation-delay-300">
                        {{ $description }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start opacity-0 animate-slide-up animation-delay-400">
                        <a href="{{ route('contact') }}" class="btn-primary">
                            Get a Quote
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#features" class="btn-outline-light">
                            Learn More
                        </a>
                    </div>
                </div>
                
                {{-- Box SVG --}}
                <div class="relative hidden lg:flex items-center justify-center">
                    <div class="w-80 h-80 text-primary animate-float opacity-0 animate-fade-in animation-delay-500">
                        <x-box-svg :type="$boxType" />
                    </div>
                    {{-- Decorative --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-96 h-96 border border-primary/20 rounded-full animate-pulse-subtle"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">KEY FEATURES</span>
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2">
                    WHY CHOOSE OUR <span class="text-primary">{{ strtoupper($title) }}</span>
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($features as $index => $feature)
                    <div class="bg-light-soft p-8 reveal animation-delay-{{ $index * 100 }}">
                        <div class="w-14 h-14 bg-dark flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl text-dark tracking-wider mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-dark-muted">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Specifications Section --}}
    <section class="py-24 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <span class="text-primary font-semibold tracking-widest text-sm">SPECIFICATIONS</span>
                    <h2 class="font-display text-4xl md:text-5xl text-light tracking-wide mt-2 mb-8">
                        CUSTOMIZATION <span class="text-primary block">OPTIONS</span>
                    </h2>
                    
                    <div class="space-y-6">
                        @foreach($specifications as $spec)
                            <div class="flex items-start space-x-4 border-b border-dark-muted pb-6">
                                <div class="w-2 h-2 bg-primary mt-2 flex-shrink-0"></div>
                                <div>
                                    <h4 class="font-semibold text-light mb-1">{{ $spec['label'] }}</h4>
                                    <p class="text-light-muted">{{ $spec['value'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="reveal animation-delay-200">
                    <div class="bg-dark-soft p-8 lg:p-12 border border-dark-muted">
                        <h3 class="font-display text-2xl text-light tracking-wider mb-6">REQUEST A SAMPLE</h3>
                        <p class="text-light-muted mb-8">See and feel the quality before you order. Request a free sample kit to experience our premium packaging firsthand.</p>
                        <a href="{{ route('contact') }}" class="btn-primary w-full justify-center">
                            Request Free Sample
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Use Cases Section --}}
    <section class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">PERFECT FOR</span>
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2">
                    IDEAL <span class="text-primary">APPLICATIONS</span>
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($useCases as $index => $useCase)
                    <div class="bg-light p-6 text-center border-2 border-light hover:border-primary transition-colors duration-300 reveal animation-delay-{{ $index * 100 }}">
                        <div class="w-12 h-12 bg-dark flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <p class="font-semibold text-dark">{{ $useCase }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 bg-primary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-4xl md:text-5xl text-light tracking-wide mb-6 reveal">
                READY TO ORDER YOUR <span class="block">{{ strtoupper($title) }}?</span>
            </h2>
            <p class="text-light/80 text-lg mb-10 reveal animation-delay-100">
                Get a custom quote tailored to your needs. Our team is ready to help you create the perfect packaging.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center reveal animation-delay-200">
                <a href="{{ route('contact') }}" class="btn-outline-light">
                    Get Free Quote
                </a>
                <a href="tel:+18001234567" class="inline-flex items-center justify-center px-8 py-4 bg-light text-primary font-semibold transition-all duration-300 hover:bg-light-soft hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    +1 (800) 123-4567
                </a>
            </div>
        </div>
    </section>

    {{-- Related Products --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">EXPLORE MORE</span>
                <h2 class="font-display text-3xl md:text-4xl text-dark tracking-wide mt-2">
                    OTHER <span class="text-primary">PRODUCTS</span>
                </h2>
            </div>
            
            @yield('related_products')
        </div>
    </section>
@endsection

