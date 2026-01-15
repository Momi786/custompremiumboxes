@extends('layouts.app')

@php
    $metaTitle = \App\Models\Settings::get('why_custom_premium_boxes_meta_title') ?: 'Why Custom Premium Boxes - Benefits of Custom Packaging';
    $metaDescription = \App\Models\Settings::get('why_custom_premium_boxes_meta_description') ?: 'Discover why custom premium boxes are essential for your business. Learn about brand impact, customer experience, and the advantages of custom packaging solutions.';
@endphp

@section('title', $metaTitle)
@section('meta_description', $metaDescription)
@section('meta_keywords', 'why custom boxes, custom packaging benefits, premium packaging advantages, branded boxes, custom packaging importance')

@php
$breadcrumbs = [
    ['label' => 'Home', 'url' => route('home')],
    ['label' => 'Why Custom Premium Boxes', 'url' => route('why-custom-premium-boxes')],
];
@endphp

@section('content')
    {{-- Hero Section --}}
    <section class="relative py-20 bg-gradient-to-br from-dark via-dark-soft to-dark overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-dark via-dark to-dark-soft"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="inline-flex items-center gap-2 bg-primary/10 border border-primary/30 px-4 py-2 mb-6 reveal">
                    <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                    <span class="text-primary text-sm font-semibold tracking-widest">WHY CHOOSE US</span>
                </div>
                <h1 class="font-display text-5xl md:text-7xl text-light tracking-wide leading-none mb-6 reveal animation-delay-100">
                    WHY CUSTOM
                    <span class="text-primary block">PREMIUM BOXES</span>
                </h1>
                <p class="text-light-muted text-lg md:text-xl max-w-3xl mx-auto leading-relaxed reveal animation-delay-200">
                    Discover how custom premium boxes can transform your brand, elevate customer experience, and drive business success through exceptional packaging solutions.
                </p>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-16 bg-light border-b border-light-muted">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @php
                $stats = [
                    ['number' => '98%', 'label' => 'Customer Satisfaction', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['number' => '10K+', 'label' => 'Happy Clients', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                    ['number' => '50K+', 'label' => 'Boxes Delivered', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                    ['number' => '24/7', 'label' => 'Support Available', 'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'],
                ];
                @endphp
                @foreach($stats as $index => $stat)
                <div class="text-center reveal animation-delay-{{ $index * 100 }}">
                    <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $stat['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="font-display text-3xl md:text-4xl text-primary mb-2">{{ $stat['number'] }}</div>
                    <div class="text-dark-muted text-sm font-medium">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Main Benefits Section --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">KEY BENEFITS</span>
                <h2 class="font-display text-4xl md:text-6xl text-dark tracking-wide mt-2">
                    Why Custom Packaging <span class="text-primary">Matters</span>
                </h2>
                <p class="text-dark-muted text-lg mt-4 max-w-2xl mx-auto">
                    Custom premium boxes are more than just containers—they're powerful tools that can transform your business.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                {{-- Benefit 1: Brand Identity --}}
                <div class="reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display text-3xl text-dark tracking-wider mb-2">01</h3>
                            <h4 class="font-display text-2xl text-primary tracking-wider">STRONG BRAND IDENTITY</h4>
                        </div>
                    </div>
                    <p class="text-dark-muted text-lg leading-relaxed mb-6">
                        Your packaging is often the first physical interaction customers have with your brand. Custom premium boxes create a memorable first impression that reinforces your brand identity and values.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Consistent brand messaging across all touchpoints</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Professional appearance that builds trust</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Stand out from competitors with unique designs</span>
                        </li>
                    </ul>
                </div>
                <div class="reveal animation-delay-200">
                    <div class="relative aspect-square bg-gradient-to-br from-primary/10 to-dark/5 rounded-2xl p-8 flex items-center justify-center">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-64 h-64 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Benefit 2: Customer Experience --}}
                <div class="reveal animation-delay-300 order-2 md:order-1">
                    <div class="relative aspect-square bg-gradient-to-br from-dark/5 to-primary/10 rounded-2xl p-8 flex items-center justify-center">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-64 h-64 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="reveal animation-delay-400 order-1 md:order-2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display text-3xl text-dark tracking-wider mb-2">02</h3>
                            <h4 class="font-display text-2xl text-primary tracking-wider">ENHANCED CUSTOMER EXPERIENCE</h4>
                        </div>
                    </div>
                    <p class="text-dark-muted text-lg leading-relaxed mb-6">
                        Premium packaging creates an unboxing experience that customers remember and share. It shows you care about every detail, from product to presentation.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Creates memorable unboxing moments</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Increases perceived product value</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Encourages social media sharing</span>
                        </li>
                    </ul>
                </div>

                {{-- Benefit 3: Product Protection --}}
                <div class="reveal animation-delay-500">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display text-3xl text-dark tracking-wider mb-2">03</h3>
                            <h4 class="font-display text-2xl text-primary tracking-wider">SUPERIOR PROTECTION</h4>
                        </div>
                    </div>
                    <p class="text-dark-muted text-lg leading-relaxed mb-6">
                        Custom boxes are designed specifically for your products, ensuring optimal protection during shipping and storage while maintaining product integrity.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Reduces damage and returns</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Perfect fit for your products</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-dark-muted">Durable materials for long-lasting quality</span>
                        </li>
                    </ul>
                </div>
                <div class="reveal animation-delay-600">
                    <div class="relative aspect-square bg-gradient-to-br from-primary/10 to-dark/5 rounded-2xl p-8 flex items-center justify-center">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-64 h-64 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Infographic Section --}}
    <section class="py-24 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">THE NUMBERS</span>
                <h2 class="font-display text-4xl md:text-6xl text-light tracking-wide mt-2">
                    Impact of Custom <span class="text-primary">Packaging</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                $infographics = [
                    [
                        'percentage' => '72%',
                        'title' => 'Brand Recognition',
                        'description' => 'of consumers say packaging design influences their purchase decision',
                        'color' => 'primary',
                        'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'
                    ],
                    [
                        'percentage' => '40%',
                        'title' => 'Shareability',
                        'description' => 'increase in social media shares with premium unboxing experience',
                        'color' => 'primary',
                        'icon' => 'M8.684 13.342C8.885 12.938 9 12.482 9 12c0-.482-.115-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z'
                    ],
                    [
                        'percentage' => '55%',
                        'title' => 'Repeat Purchase',
                        'description' => 'more likely to repurchase from brands with premium packaging',
                        'color' => 'primary',
                        'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'
                    ],
                    [
                        'percentage' => '90%',
                        'title' => 'Customer Satisfaction',
                        'description' => 'of customers value premium packaging as part of product quality',
                        'color' => 'primary',
                        'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
                    ],
                ];
                @endphp

                @foreach($infographics as $index => $info)
                <div class="bg-dark-soft border border-dark-muted p-8 rounded-2xl hover:border-primary transition-all duration-300 reveal animation-delay-{{ $index * 100 }}">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $info['icon'] }}"/>
                            </svg>
                        </div>
                        <div class="font-display text-5xl text-primary mb-3">{{ $info['percentage'] }}</div>
                        <h3 class="font-display text-xl text-light tracking-wider mb-3">{{ $info['title'] }}</h3>
                        <p class="text-light-muted text-sm leading-relaxed">{{ $info['description'] }}</p>
                    </div>
                    {{-- Progress Bar --}}
                    <div class="w-full bg-dark-muted rounded-full h-2 overflow-hidden">
                        <div class="bg-primary h-full rounded-full transition-all duration-1000" style="width: {{ str_replace('%', '', $info['percentage']) }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Comparison Section --}}
    <section class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">COMPARISON</span>
                <h2 class="font-display text-4xl md:text-6xl text-dark tracking-wide mt-2">
                    Custom vs. <span class="text-primary">Standard</span>
                </h2>
            </div>

            <div class="bg-light rounded-2xl p-8 md:p-12 shadow-lg reveal">
                <div class="grid md:grid-cols-2 gap-8">
                    {{-- Standard Packaging --}}
                    <div class="border-2 border-light-muted rounded-xl p-8">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 mx-auto mb-4 bg-dark/5 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-dark-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                            <h3 class="font-display text-2xl text-dark tracking-wider mb-2">STANDARD PACKAGING</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-dark-muted flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-dark-muted">Generic, one-size-fits-all design</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-dark-muted flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-dark-muted">No brand differentiation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-dark-muted flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-dark-muted">Limited protection options</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-dark-muted flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-dark-muted">Forgettable customer experience</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Custom Premium Boxes --}}
                    <div class="border-2 border-primary rounded-xl p-8 bg-primary/5">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            </div>
                            <h3 class="font-display text-2xl text-primary tracking-wider mb-2">CUSTOM PREMIUM BOXES</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-dark">Tailored design for your brand</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-dark">Strong brand identity and recognition</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-dark">Optimal protection for your products</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-dark">Memorable unboxing experience</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Process Infographic --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">OUR PROCESS</span>
                <h2 class="font-display text-4xl md:text-6xl text-dark tracking-wide mt-2">
                    How We Create Your <span class="text-primary">Custom Boxes</span>
                </h2>
            </div>

            <div class="relative">
                {{-- Connection Line (Desktop) --}}
                <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-0.5 bg-primary/20 transform -translate-y-1/2"></div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                    @php
                    $processSteps = [
                        ['num' => '01', 'title' => 'Consultation', 'desc' => 'We discuss your needs, brand, and vision', 'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'],
                        ['num' => '02', 'title' => 'Design', 'desc' => 'Our designers create custom packaging concepts', 'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01'],
                        ['num' => '03', 'title' => 'Production', 'desc' => 'We manufacture with premium materials', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                        ['num' => '04', 'title' => 'Delivery', 'desc' => 'Fast shipping to your doorstep', 'icon' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4'],
                    ];
                    @endphp

                    @foreach($processSteps as $index => $step)
                    <div class="relative reveal animation-delay-{{ $index * 100 }}">
                        <div class="bg-light border-2 border-light-muted rounded-2xl p-8 text-center hover:border-primary transition-all duration-300 hover:shadow-lg">
                            <div class="w-20 h-20 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center relative z-10">
                                <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"/>
                                </svg>
                            </div>
                            <div class="font-display text-3xl text-primary mb-3">{{ $step['num'] }}</div>
                            <h3 class="font-display text-xl text-dark tracking-wider mb-3">{{ strtoupper($step['title']) }}</h3>
                            <p class="text-dark-muted text-sm">{{ $step['desc'] }}</p>
                        </div>
                        @if($index < count($processSteps) - 1)
                        <div class="hidden lg:block absolute top-1/2 -right-4 w-8 h-0.5 bg-primary/20 z-0"></div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-20 -left-20 w-80 h-80 border-2 border-light rotate-45"></div>
            <div class="absolute -bottom-20 -right-20 w-80 h-80 border-2 border-light rotate-45"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="font-display text-4xl md:text-6xl text-light tracking-wide mb-6 reveal">
                Ready to Elevate Your <span class="block">Packaging Experience?</span>
            </h2>
            <p class="text-light/80 text-lg md:text-xl mb-10 max-w-2xl mx-auto reveal animation-delay-100">
                Join thousands of satisfied customers who have transformed their brand with custom premium boxes.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center reveal animation-delay-200">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-10 py-5 bg-light text-primary font-semibold transition-all duration-300 hover:bg-light-soft hover:scale-105">
                    Get Free Quote
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('products.index') }}" class="inline-flex items-center justify-center px-10 py-5 border-2 border-light text-light font-semibold transition-all duration-300 hover:bg-light/10 hover:scale-105">
                    View Our Products
                </a>
            </div>
        </div>
    </section>
@endsection

