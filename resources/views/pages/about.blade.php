@extends('layouts.app')

@php
    $metaTitle = \App\Models\Settings::get('about_meta_title') ?: 'About Us - Custom Premium Boxes';
    $metaDescription = \App\Models\Settings::get('about_meta_description') ?: 'Learn about Custom Premium Boxes - your trusted partner for premium custom packaging solutions. Quality, innovation, and customer satisfaction since 2010.';
@endphp

@section('title', $metaTitle)
@section('meta_description', $metaDescription)
@section('meta_keywords', 'about custom premium boxes, packaging company, custom packaging manufacturer, box printing company')

@php
$breadcrumbs = [
    ['label' => 'Home', 'url' => route('home')],
    ['label' => 'About', 'url' => route('about')],
];
@endphp

@section('content')
    {{-- Hero Section --}}
    <section class="bg-dark py-20 lg:py-32 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 right-10 w-64 h-64 border border-light animate-rotate-slow"></div>
            <div class="absolute bottom-10 left-10 w-48 h-48 border border-light animate-rotate-slow" style="animation-direction: reverse;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block text-primary font-semibold tracking-widest text-sm mb-4 opacity-0 animate-fade-in">
                    OUR STORY
                </span>
                <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-light tracking-wide leading-none mb-6 opacity-0 animate-slide-up animation-delay-100">
                    CRAFTING <span class="text-primary">EXCELLENCE</span>
                </h1>
                <p class="text-light-muted text-lg md:text-xl leading-relaxed opacity-0 animate-slide-up animation-delay-200">
                    Since 2010, we've been helping businesses create unforgettable brand experiences through premium custom packaging.
                </p>
            </div>
        </div>
    </section>

    {{-- Our Story Section --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <span class="text-primary font-semibold tracking-widest text-sm">WHO WE ARE</span>
                    <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2 mb-6">
                        PACKAGING THAT <span class="text-primary block">TELLS YOUR STORY</span>
                    </h2>
                    <div class="space-y-4 text-dark-muted">
                        <p>
                            Custom Premium Boxes was founded with a simple mission: to help businesses of all sizes access high-quality, custom packaging that was previously only available to major brands.
                        </p>
                        <p>
                            What started as a small print shop has grown into a full-service packaging company serving thousands of businesses across the country. But our core values remain the same – quality craftsmanship, customer-first service, and a commitment to helping your brand shine.
                        </p>
                        <p>
                            Every box we create is a reflection of your brand's story. We understand that packaging is often the first physical touchpoint between you and your customers, and we take that responsibility seriously.
                        </p>
                    </div>
                </div>
                
                <div class="reveal animation-delay-200">
                    <div class="relative">
                        <div class="bg-dark p-12 relative z-10">
                            <div class="w-48 h-48 mx-auto text-primary animate-float">
                                <x-box-svg type="rigid" />
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-primary"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-24 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="reveal">
                    <span class="font-display text-6xl md:text-7xl text-primary">15+</span>
                    <p class="text-light-muted mt-2 text-lg">Years Experience</p>
                </div>
                <div class="reveal animation-delay-100">
                    <span class="font-display text-6xl md:text-7xl text-primary">500+</span>
                    <p class="text-light-muted mt-2 text-lg">Happy Clients</p>
                </div>
                <div class="reveal animation-delay-200">
                    <span class="font-display text-6xl md:text-7xl text-primary">1M+</span>
                    <p class="text-light-muted mt-2 text-lg">Boxes Produced</p>
                </div>
                <div class="reveal animation-delay-300">
                    <span class="font-display text-6xl md:text-7xl text-primary">99%</span>
                    <p class="text-light-muted mt-2 text-lg">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">OUR VALUES</span>
                <h2 class="font-display text-4xl md:text-5xl text-dark tracking-wide mt-2">
                    WHAT DRIVES <span class="text-primary">US</span>
                </h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-light p-8 reveal">
                    <div class="w-14 h-14 bg-dark flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-dark tracking-wider mb-3">QUALITY FIRST</h3>
                    <p class="text-dark-muted">We never compromise on quality. Every box undergoes rigorous quality control to ensure it meets our high standards.</p>
                </div>
                
                <div class="bg-light p-8 reveal animation-delay-100">
                    <div class="w-14 h-14 bg-dark flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-dark tracking-wider mb-3">CUSTOMER FOCUSED</h3>
                    <p class="text-dark-muted">Your success is our success. We work closely with each client to understand their needs and deliver solutions that exceed expectations.</p>
                </div>
                
                <div class="bg-light p-8 reveal animation-delay-200">
                    <div class="w-14 h-14 bg-dark flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl text-dark tracking-wider mb-3">ECO-CONSCIOUS</h3>
                    <p class="text-dark-muted">We're committed to sustainability. Our eco-friendly options help you reduce environmental impact without sacrificing quality.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 bg-primary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-4xl md:text-5xl text-light tracking-wide mb-6 reveal">
                READY TO WORK <span class="block">WITH US?</span>
            </h2>
            <p class="text-light/80 text-lg mb-10 reveal animation-delay-100">
                Let's create packaging that makes your brand unforgettable.
            </p>
            <a href="{{ route('contact') }}" class="btn-outline-light reveal animation-delay-200">
                Get in Touch
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </section>
@endsection






