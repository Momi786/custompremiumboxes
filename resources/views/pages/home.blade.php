@extends('layouts.app')

@section('title', 'Custom Premium Boxes - Premium Custom Packaging Solutions')
@section('meta_description', 'Create stunning custom packaging that elevates your brand. Premium mailer boxes, rigid boxes, bakery boxes & more. Fast turnaround, competitive pricing.')
@section('meta_keywords', 'custom packaging, custom boxes, mailer boxes, rigid boxes, bakery boxes, chocolate boxes, premium packaging, branded packaging')

@section('content')
    {{-- Hero Section --}}
    <section class="relative min-h-[90vh] bg-dark overflow-hidden flex items-center">
        {{-- Animated Background Pattern --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-dark via-dark to-dark-soft"></div>
            {{-- Grid Pattern --}}
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
            {{-- Floating Elements --}}
            <div class="absolute top-20 left-10 w-64 h-64 border border-primary/20 rotate-45 animate-float"></div>
            <div class="absolute top-40 right-20 w-48 h-48 border border-light/10 rotate-12 animate-float animation-delay-300" style="animation-direction: reverse;"></div>
            <div class="absolute bottom-20 left-1/4 w-32 h-32 bg-primary/5 rotate-45 animate-pulse-subtle"></div>
            <div class="absolute bottom-40 right-1/3 w-56 h-56 border border-primary/10 -rotate-12 animate-float animation-delay-500"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Hero Content --}}
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-primary/10 border border-primary/30 px-4 py-2 mb-6 opacity-0 animate-fade-in">
                        <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                        <span class="text-primary text-sm font-semibold tracking-widest">PREMIUM CUSTOM PACKAGING</span>
                    </div>
                    <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-light tracking-wide leading-none mb-6 opacity-0 animate-slide-up animation-delay-100">
                        DESIGN CUSTOM
                        <span class="text-primary block">BOXES & PACKAGING</span>
                    </h1>
                    <p class="text-light-muted text-lg md:text-xl max-w-xl mx-auto lg:mx-0 mb-8 leading-relaxed opacity-0 animate-slide-up animation-delay-200">
                        Our custom printed packaging and branded boxes will delight your customers. 
                        From elegant rigid boxes to practical mailer solutions, we bring your brand vision to life.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start opacity-0 animate-slide-up animation-delay-300">
                        <a href="{{ route('contact') }}" class="btn-primary group">
                            Get Free Quote
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#products" class="btn-outline-light">
                            Explore All Products
                        </a>
                    </div>
                    
                    {{-- Trust Badges --}}
                    <div class="flex flex-wrap gap-8 mt-12 justify-center lg:justify-start opacity-0 animate-fade-in animation-delay-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-light-muted text-sm">Free Shipping</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-light-muted text-sm">Free Design</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-light-muted text-sm">100% Satisfaction</span>
                        </div>
                    </div>
                </div>
                
                {{-- Hero Visual --}}
                <div class="relative hidden lg:block">
                    <div class="relative w-full aspect-square">
                        {{-- Main Box Display --}}
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-72 h-72 text-primary animate-float opacity-0 animate-fade-in animation-delay-400">
                                <x-box-svg type="mailer" />
                            </div>
                        </div>
                        {{-- Floating Secondary Boxes --}}
                        <div class="absolute top-0 right-0 w-32 h-32 text-light/80 animate-float animation-delay-200 opacity-0 animate-fade-in animation-delay-500">
                            <x-box-svg type="rigid" />
                        </div>
                        <div class="absolute bottom-0 left-0 w-28 h-28 text-primary/60 animate-float animation-delay-400 opacity-0 animate-fade-in animation-delay-600">
                            <x-box-svg type="chocolate" />
                        </div>
                        {{-- Decorative Circles --}}
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 border-2 border-primary/20 rounded-full animate-pulse-subtle"></div>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 border border-light/5 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 opacity-0 animate-fade-in animation-delay-700">
            <a href="#trusted" class="flex flex-col items-center text-light-muted hover:text-primary transition-colors duration-300">
                <span class="text-xs tracking-widest mb-2">SCROLL</span>
                <div class="w-6 h-10 border-2 border-current rounded-full flex justify-center pt-2">
                    <div class="w-1 h-2 bg-current rounded-full animate-bounce"></div>
                </div>
            </a>
        </div>
    </section>

    {{-- Trusted Brands Section --}}
    <section id="trusted" class="py-12 bg-light border-b border-light-muted">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <span class="text-dark-muted text-sm tracking-widest uppercase">Trusted by Global Brands to Small Businesses</span>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-60">
                @for($i = 1; $i <= 6; $i++)
                <div class="w-24 h-12 bg-dark-muted/20 flex items-center justify-center text-dark-muted font-display text-lg tracking-wider">
                    BRAND {{ $i }}
                </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Features Strip --}}
    <section class="py-16 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group reveal">
                    <div class="w-16 h-16 mx-auto mb-4 border-2 border-primary flex items-center justify-center group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-8 h-8 text-primary group-hover:text-light transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-light tracking-wider mb-2">CUSTOM SIZES</h3>
                    <p class="text-light-muted text-sm">Create boxes in any size or shape you need</p>
                </div>
                
                <div class="text-center group reveal animation-delay-100">
                    <div class="w-16 h-16 mx-auto mb-4 border-2 border-primary flex items-center justify-center group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-8 h-8 text-primary group-hover:text-light transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-light tracking-wider mb-2">ECO-FRIENDLY</h3>
                    <p class="text-light-muted text-sm">Sustainable & recyclable packaging options</p>
                </div>
                
                <div class="text-center group reveal animation-delay-200">
                    <div class="w-16 h-16 mx-auto mb-4 border-2 border-primary flex items-center justify-center group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-8 h-8 text-primary group-hover:text-light transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-light tracking-wider mb-2">FREE DESIGN</h3>
                    <p class="text-light-muted text-sm">Our designers transform your vision into reality</p>
                </div>
                
                <div class="text-center group reveal animation-delay-300">
                    <div class="w-16 h-16 mx-auto mb-4 border-2 border-primary flex items-center justify-center group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-8 h-8 text-primary group-hover:text-light transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-light tracking-wider mb-2">FREE SHIPPING</h3>
                    <p class="text-light-muted text-sm">Fast & free delivery right to your doorstep</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries Section --}}
    <section id="industries" class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">ALL INDUSTRIES UNDER ONE ROOF</span>
                <h2 class="font-display text-4xl md:text-6xl text-dark tracking-wide mt-2">
                    SELECT YOUR <span class="text-primary">INDUSTRY</span>
                </h2>
                <p class="text-dark-muted text-lg mt-4 max-w-2xl mx-auto">
                    Explore our extensive library of packaging solutions. From cosmetics to food, retail to CBD - we've got you covered.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse($featuredCategories ?? [] as $index => $category)
                <a href="{{ route('categories.show', $category->slug) }}" class="group bg-light p-6 border-2 border-transparent hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 4) * 100 }}">
                    @if($category->image)
                    <div class="w-full h-32 mb-4 bg-light-soft overflow-hidden">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    @else
                    <div class="w-12 h-12 bg-dark flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-6 h-6 text-primary group-hover:text-light transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    @endif
                    <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">{{ strtoupper($category->name) }}</h3>
                    @if($category->description)
                    <p class="text-dark-muted text-xs mt-2 line-clamp-2">{{ Str::limit($category->description, 60) }}</p>
                    @endif
                    <span class="text-primary text-sm font-semibold opacity-0 group-hover:opacity-100 transition-opacity inline-flex items-center mt-2">
                        Explore
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
                @empty
                {{-- Fallback static industries if no categories exist --}}
                @php
                $industries = [
                    ['name' => 'Cosmetic Boxes', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['name' => 'Food Boxes', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                    ['name' => 'Retail Boxes', 'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z'],
                    ['name' => 'CBD Packaging', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                ];
                @endphp
                @foreach($industries as $index => $industry)
                <a href="{{ route('contact') }}" class="group bg-light p-6 border-2 border-transparent hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 4) * 100 }}">
                    <div class="w-12 h-12 bg-dark flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-6 h-6 text-primary group-hover:text-light transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $industry['icon'] }}"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">{{ strtoupper($industry['name']) }}</h3>
                </a>
                @endforeach
                @endforelse
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mb-4">
                    Services that meet your <span class="text-primary">packaging needs</span>
                </h2>
                <p class="text-dark-muted text-lg max-w-3xl mx-auto leading-relaxed">
                    Our 360° Custom Premium Boxes approach delivers all the services you need to create the best packaging solutions your products and business needs in order to achieve total packaging success.
                </p>
            </div>

            {{-- Service Navigation Tabs --}}
            <div class="flex flex-wrap justify-center gap-2 mb-16 reveal animation-delay-100">
                @php
                $services = [
                    ['name' => 'Consultation', 'active' => true],
                    ['name' => 'Design', 'active' => false],
                    ['name' => 'Prototype', 'active' => false],
                    ['name' => 'Production', 'active' => false],
                    ['name' => 'Logistic', 'active' => false],
                    ['name' => 'Optimize', 'active' => false],
                ];
                @endphp
                @foreach($services as $service)
                <button class="px-6 py-3 text-sm font-semibold border-b-2 transition-colors duration-300 {{ $service['active'] ? 'border-primary text-primary' : 'border-transparent text-dark-muted hover:text-dark hover:border-dark-muted' }}">
                    {{ $service['name'] }}
                </button>
                @endforeach
            </div>

            {{-- Packaging Showcase Grid --}}
            <div class="mb-20 reveal animation-delay-200">
                <div class="bg-light-soft rounded-2xl p-8 md:p-12">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        @for($i = 1; $i <= 8; $i++)
                        <div class="group relative aspect-square bg-light rounded-lg overflow-hidden border-2 border-light-muted hover:border-primary transition-all duration-300 hover:shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-br from-dark/5 to-primary/5 flex items-center justify-center">
                                <svg class="w-16 h-16 text-primary/30 group-hover:text-primary/50 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>

            {{-- Total Packaging Success Section --}}
            <div class="bg-dark rounded-2xl p-8 md:p-12 reveal animation-delay-300">
                <div class="text-center mb-12">
                    <h3 class="font-display text-3xl md:text-4xl text-light tracking-wide mb-4">
                        Total packaging success with <span class="text-primary">360° Custom Premium Boxes</span> approach
                    </h3>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                    @php
                    $benefits = [
                        [
                            'title' => 'Save cost & time',
                            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                            'description' => 'Benefit from expertly engineered solutions designed to save you as much time and money as possible.'
                        ],
                        [
                            'title' => 'More reliability',
                            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                            'description' => 'Get your packaging from certified manufacturers for reliable results every single time.'
                        ],
                        [
                            'title' => 'More brand impact',
                            'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01',
                            'description' => 'Leave your customers with a lasting impression with solutions designed for brand impact and recognition.'
                        ],
                        [
                            'title' => 'Become sustainable',
                            'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                            'description' => 'Choose from a large range of eco-packaging options that are certified and sustainably sourced.'
                        ],
                    ];
                    @endphp

                    @foreach($benefits as $index => $benefit)
                    <div class="text-center group">
                        <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-300">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $benefit['icon'] }}"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-lg text-light tracking-wider mb-3 group-hover:text-primary transition-colors">
                            {{ strtoupper($benefit['title']) }}
                        </h4>
                        <p class="text-light-muted text-sm leading-relaxed">
                            {{ $benefit['description'] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Products Section --}}
    <section id="products" class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">OUR PRODUCTS</span>
                <h2 class="font-display text-4xl md:text-6xl text-dark tracking-wide mt-2">
                    PREMIUM PACKAGING <span class="text-primary">SOLUTIONS</span>
                </h2>
                <p class="text-dark-muted text-lg mt-4 max-w-2xl mx-auto">
                    Discover our range of custom packaging options designed to elevate your brand and create memorable experiences.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredProducts ?? [] as $index => $product)
                <a href="{{ route('products.show', $product->slug) }}" class="group reveal animation-delay-{{ ($index % 3) * 100 }}">
                    <div class="relative {{ $index % 3 == 1 ? 'bg-dark border-2 border-dark' : 'bg-light-soft border-2 border-light-muted' }} hover:border-primary overflow-hidden transition-all duration-500">
                        <div class="absolute top-0 right-0 w-32 h-32 {{ $index % 3 == 1 ? 'bg-primary/10' : 'bg-primary/5' }} -mr-16 -mt-16 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                        <div class="p-8 relative">
                            @if($product->image)
                            <div class="w-full h-48 mb-6 bg-light-soft overflow-hidden">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            </div>
                            @else
                            <div class="w-28 h-28 mx-auto mb-6 {{ $index % 3 == 1 ? 'text-light' : 'text-dark' }} group-hover:text-primary transition-colors duration-300">
                                <x-box-svg type="mailer" />
                            </div>
                            @endif
                            <h3 class="font-display text-2xl {{ $index % 3 == 1 ? 'text-light' : 'text-dark' }} text-center tracking-wider group-hover:text-primary transition-colors duration-300">
                                {{ strtoupper($product->name) }}
                            </h3>
                            <p class="{{ $index % 3 == 1 ? 'text-light-muted' : 'text-dark-muted' }} text-center mt-3 text-sm">
                                {{ Str::limit($product->short_description ?? $product->description ?? '', 80) }}
                            </p>
                            <div class="flex items-center justify-center mt-6 text-primary">
                                <span class="text-sm font-semibold tracking-wider group-hover:mr-2 transition-all">EXPLORE</span>
                                <svg class="w-4 h-4 opacity-0 -ml-4 group-hover:opacity-100 group-hover:ml-0 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                @empty
                {{-- Fallback message if no featured products --}}
                <div class="col-span-full text-center py-12">
                    <p class="text-dark-muted">No featured products available. Please add products from the admin panel.</p>
                    <a href="{{ route('products.index') }}" class="btn-primary mt-4">View All Products</a>
                </div>
                @endforelse
            </div>
            
            @if(isset($featuredProducts) && $featuredProducts->count() > 0)
            <div class="text-center mt-12 reveal">
                <a href="{{ route('products.index') }}" class="btn-outline">
                    View All Products
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            @endif
        </div>
    </section>

    {{-- Eco-Friendly Section --}}
    <section class="py-20 bg-gradient-to-r from-dark via-dark-soft to-dark relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23CA1D1F\" fill-opacity=\"0.03\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/30 px-4 py-2 mb-6">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-green-500 text-sm font-semibold tracking-widest">TEAM GREEN WELCOMES YOU</span>
                    </div>
                    <h2 class="font-display text-4xl md:text-5xl text-light tracking-wide mb-6">
                        ECO-FRIENDLY &<br><span class="text-primary">SUSTAINABLE</span> PACKAGING
                    </h2>
                    <p class="text-light-muted text-lg leading-relaxed mb-8">
                        We understand your concerns! We only offer sustainable custom boxes made from recyclable and biodegradable materials. Reduce your carbon footprint without compromising on quality or aesthetics.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-light-muted">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            100% Recyclable Materials
                        </li>
                        <li class="flex items-center gap-3 text-light-muted">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Soy-Based Inks
                        </li>
                        <li class="flex items-center gap-3 text-light-muted">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            FSC Certified Paper
                        </li>
                        <li class="flex items-center gap-3 text-light-muted">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Zero Plastic Options Available
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-green-500 font-semibold hover:text-green-400 transition-colors">
                        Shop Eco-Friendly
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="relative reveal animation-delay-200">
                    <div class="aspect-square bg-gradient-to-br from-green-500/20 to-primary/20 rounded-full flex items-center justify-center">
                        <svg class="w-48 h-48 text-green-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Box Styles Section --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">BOX STYLES & CLOSURES</span>
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2">
                    PICK FROM A SELECTION OF<br><span class="text-primary">PACKAGING OPTIONS</span>
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $boxStyles = [
                    ['name' => 'Bottom Closure', 'desc' => 'High demand boxes made with premium materials to ensure valuables are well protected.'],
                    ['name' => 'Fold & Assemble', 'desc' => 'Best for medicine to food, jewellery, cosmetics and even big electrical items.'],
                    ['name' => 'Showcase Display', 'desc' => 'Ideal packaging for showcasing which are exemplary for displaying products in shop.'],
                    ['name' => 'Top Closure', 'desc' => 'Customizable as per product needs. Long-lasting and tough to increase strength.'],
                    ['name' => 'Die-Cut Design', 'desc' => 'Perfect for securing delicate glass products. Highly durable and easily manufactured.'],
                    ['name' => 'Rectangular Handy', 'desc' => 'Handy and catchy, easily manageable. Ideal for holding a variety of objects.'],
                ];
                @endphp
                
                @foreach($boxStyles as $index => $style)
                <div class="group bg-light-soft p-8 border-2 border-transparent hover:border-primary transition-all duration-300 reveal animation-delay-{{ ($index % 3) * 100 }}">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-dark flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors duration-300">
                            <span class="font-display text-xl text-primary group-hover:text-light transition-colors">{{ sprintf('%02d', $index + 1) }}</span>
                        </div>
                        <div>
                            <h3 class="font-display text-xl text-dark tracking-wider mb-2 group-hover:text-primary transition-colors">{{ strtoupper($style['name']) }}</h3>
                            <p class="text-dark-muted text-sm">{{ $style['desc'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="py-24 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">WHAT WE OFFER</span>
                <h2 class="font-display text-4xl md:text-5xl text-light tracking-wide mt-2">
                    OUR SIMPLE <span class="text-primary">PROCESS</span>
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $steps = [
                    ['num' => '01', 'title' => 'Choose Product Style', 'desc' => 'Browse our website to choose from a wide variety of products and styles based on your specifications.', 'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'],
                    ['num' => '02', 'title' => 'Request Free Quote', 'desc' => 'Contact us via phone, live chat, or email. Just fill out the form to get an instant price quote.', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'],
                    ['num' => '03', 'title' => 'Approve Design', 'desc' => 'We provide free designing services. Review and approve your design proof before production.', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['num' => '04', 'title' => 'Production Starts', 'desc' => 'Your approval triggers production and testing of the order to ensure quality standards.', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                    ['num' => '05', 'title' => 'Free Shipping', 'desc' => 'We provide free expedite shipping at your doorstep through renowned courier companies.', 'icon' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4'],
                    ['num' => '06', 'title' => 'Delivered to You', 'desc' => 'Receive your custom boxes right at your doorstep. Fast, reliable, and on-time delivery.', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                ];
                @endphp
                
                @foreach($steps as $index => $step)
                <div class="relative group reveal animation-delay-{{ ($index % 3) * 100 }}">
                    <div class="bg-dark-soft border border-dark-muted p-8 h-full hover:border-primary transition-colors duration-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-primary flex items-center justify-center">
                                <svg class="w-7 h-7 text-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"/>
                                </svg>
                            </div>
                            <span class="font-display text-4xl text-dark-muted group-hover:text-primary transition-colors">{{ $step['num'] }}</span>
                        </div>
                        <h3 class="font-display text-xl text-light tracking-wider mb-3">{{ strtoupper($step['title']) }}</h3>
                        <p class="text-light-muted text-sm">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">SUCCESS STORIES</span>
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2">
                    WHAT OUR <span class="text-primary">CLIENTS SAY</span>
                </h2>
                <p class="text-dark-muted text-lg mt-4 max-w-2xl mx-auto">
                    See how we help big brands and small businesses improve their packaging game.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                @php
                $testimonials = [
                    ['name' => 'Jessica Davis', 'role' => 'E-commerce Brand Owner', 'initials' => 'JD', 'text' => 'The boxes just arrived and they are spectacular! Let me be honest, I was nervous while ordering but the team wonderfully got me through until I was satisfied.'],
                    ['name' => 'Michael Roberts', 'role' => 'Luxury Gift Shop', 'initials' => 'MR', 'text' => 'Awesome experience! The team went above and beyond to process my order quickly, was attentive to all details, and overall excellent customer service.'],
                    ['name' => 'Sarah Chen', 'role' => 'Bakery Owner', 'initials' => 'SC', 'text' => 'I have worked with them for 1.5 years, and not once they let me down. They provided what was ordered on time with expected quality goods.'],
                ];
                @endphp
                
                @foreach($testimonials as $index => $testimonial)
                <div class="bg-light p-8 border-2 border-light-muted hover:border-primary transition-colors duration-300 reveal animation-delay-{{ $index * 100 }}">
                    <div class="flex text-primary mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-dark-muted mb-6 italic leading-relaxed">"{{ $testimonial['text'] }}"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-dark flex items-center justify-center text-light font-display text-lg">{{ $testimonial['initials'] }}</div>
                        <div class="ml-4">
                            <p class="font-semibold text-dark">{{ $testimonial['name'] }}</p>
                            <p class="text-dark-muted text-sm">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-24 bg-light">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">HAVE QUESTIONS?</span>
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2">
                    FREQUENTLY ASKED <span class="text-primary">QUESTIONS</span>
                </h2>
            </div>
            
            <div class="space-y-4" x-data="{ openFaq: null }">
                @php
                $faqs = [
                    ['q' => 'Do you offer custom printing?', 'a' => 'Yes! Our packaging can be printed in full color, one or two colors, gold foiled, embossed, debossed, or spot UV printed on all sides, depending on your preferences.'],
                    ['q' => 'What is the minimum order quantity?', 'a' => 'Rigid luxury or normal cardboard packaging requires a minimum order quantity of 100 units. Smaller quantities are also possible with premium pricing.'],
                    ['q' => 'What is your turnaround time?', 'a' => 'We offer a turnaround time of 10-12 business days for cardboard/corrugated packaging and 12-15 business days for luxury rigid packaging. Rush shipping is available.'],
                    ['q' => 'Can you help with the design?', 'a' => 'Absolutely! We provide free online graphic design assistance for all projects. Share your logo and ideas, and we handle everything else.'],
                    ['q' => 'Is shipping included?', 'a' => 'Yes! We provide free shipping via renowned courier companies (DHL, FedEx, etc.) worldwide. Fast and reliable delivery guaranteed.'],
                    ['q' => 'What payment methods do you accept?', 'a' => 'We accept wire transfer, bank transfer, PayPal, credit cards, and email transfers for your convenience.'],
                ];
                @endphp
                
                @foreach($faqs as $index => $faq)
                <div class="border-2 border-light-muted reveal animation-delay-{{ ($index % 3) * 100 }}" x-data="{ open: false }">
                    <button 
                        class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-light-soft transition-colors"
                        @@click="open = !open"
                    >
                        <span class="font-semibold text-dark pr-4">{{ $faq['q'] }}</span>
                        <svg class="w-5 h-5 text-primary flex-shrink-0 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="px-6 pb-5">
                        <p class="text-dark-muted">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Consultation CTA Section --}}
    <section class="py-20 bg-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-96 h-96 bg-primary/30 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/30 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <h2 class="font-display text-4xl md:text-5xl text-light tracking-wide mb-4">
                        NEED HELP?
                    </h2>
                    <p class="text-light-muted text-lg mb-6">
                        Get in touch for a free consultation with a trained packaging specialist. We'll help you find the perfect custom boxes for your brand.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="btn-primary">
                            Contact Us
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="tel:+18001234567" class="btn-outline-light">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Call Us Now
                        </a>
                    </div>
                </div>
                <div class="hidden lg:flex justify-end reveal animation-delay-200">
                    <div class="relative">
                        <div class="w-64 h-64 bg-primary/20 rounded-full flex items-center justify-center">
                            <div class="w-48 h-48 bg-primary/30 rounded-full flex items-center justify-center">
                                <svg class="w-24 h-24 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Final CTA Section --}}
    <section class="py-24 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-20 -left-20 w-80 h-80 border-2 border-light rotate-45"></div>
            <div class="absolute -bottom-20 -right-20 w-80 h-80 border-2 border-light rotate-45"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-light/20 rounded-full"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-6 reveal">
                LET'S BUILD SOMETHING
                <span class="block">GREAT TOGETHER</span>
            </h2>
            <p class="text-light/80 text-lg md:text-xl mb-10 max-w-2xl mx-auto reveal animation-delay-100">
                Ready to elevate your packaging? Get a free quote today and discover how custom packaging can transform your brand experience.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center reveal animation-delay-200">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 bg-light text-primary font-semibold transition-all duration-300 hover:bg-light-soft hover:scale-105">
                    Get Started Today
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
