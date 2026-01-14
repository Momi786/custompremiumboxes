@php
$title = 'Bakery Boxes';
$subtitle = 'FOOD-SAFE PACKAGING SOLUTIONS';
$description = 'Showcase your delicious baked goods with our premium bakery boxes. Food-safe, grease-resistant, and beautifully designed to make your creations irresistible.';
$metaDescription = 'Custom bakery boxes with window options for cakes, cupcakes, cookies and pastries. Food-safe, grease-resistant materials. Get your free quote!';
$metaKeywords = 'bakery boxes, cake boxes, cupcake boxes, pastry boxes, food packaging, custom bakery packaging, cookie boxes';
$boxType = 'bakery';

$features = [
    [
        'title' => 'FOOD-SAFE MATERIALS',
        'description' => 'FDA-approved, food-grade materials ensure your baked goods stay fresh and safe for consumption.',
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
    ],
    [
        'title' => 'WINDOW OPTIONS',
        'description' => 'Clear window panels showcase your delicious creations while protecting them from the elements.',
        'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'
    ],
    [
        'title' => 'GREASE RESISTANT',
        'description' => 'Special coating prevents grease and moisture from soaking through, keeping boxes looking pristine.',
        'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'
    ],
    [
        'title' => 'EASY ASSEMBLY',
        'description' => 'Pre-scored and pre-folded designs allow for quick assembly, saving time during busy rush hours.',
        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
    ],
    [
        'title' => 'VENTILATION',
        'description' => 'Optional ventilation holes prevent condensation and keep your baked goods at their best.',
        'icon' => 'M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z'
    ],
    [
        'title' => 'BRAND CUSTOMIZATION',
        'description' => 'Full-color printing lets you showcase your bakery brand and create a memorable presentation.',
        'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01'
    ]
];

$specifications = [
    ['label' => 'Material Options', 'value' => 'Food-grade SBS, Kraft, white cardboard with grease-resistant coating'],
    ['label' => 'Size Range', 'value' => 'From 4" x 4" x 2" to 16" x 16" x 8" (custom sizes for cakes available)'],
    ['label' => 'Window Options', 'value' => 'Clear PET, circular, rectangular, or custom die-cut windows'],
    ['label' => 'Printing', 'value' => 'Food-safe inks, full color CMYK, 1-4 PMS colors'],
    ['label' => 'Features', 'value' => 'Carry handles, inserts, dividers, cake boards, grease-proof liners'],
    ['label' => 'Turnaround', 'value' => 'Standard 10-14 business days, Rush 5-7 business days']
];

$useCases = [
    'Cakes & Pastries',
    'Cupcakes',
    'Donuts',
    'Cookies',
    'Bread & Rolls',
    'Pies & Tarts',
    'Wedding Cakes',
    'Catering Events'
];
@endphp

@extends('layouts.product')

@section('related_products')
    <div class="grid md:grid-cols-3 gap-8">
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="chocolate" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">CHOCOLATE BOXES</h3>
            </div>
        </a>
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="mailer" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">MAILER BOXES</h3>
            </div>
        </a>
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="rigid" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">RIGID BOXES</h3>
            </div>
        </a>
    </div>
@endsection
