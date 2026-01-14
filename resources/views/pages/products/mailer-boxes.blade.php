@php
$title = 'Mailer Boxes';
$subtitle = 'PREMIUM E-COMMERCE PACKAGING';
$description = 'Elevate your e-commerce brand with custom mailer boxes that create unforgettable unboxing experiences. Durable, beautiful, and 100% customizable.';
$metaDescription = 'Custom mailer boxes for e-commerce and subscription services. Full-color printing, eco-friendly materials, fast turnaround. Get a free quote today!';
$metaKeywords = 'mailer boxes, custom mailer boxes, e-commerce packaging, shipping boxes, subscription boxes, branded mailer boxes';
$boxType = 'mailer';

$features = [
    [
        'title' => 'SELF-LOCKING DESIGN',
        'description' => 'Our mailer boxes feature a secure self-locking mechanism that keeps your products safe during shipping without the need for tape.',
        'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'
    ],
    [
        'title' => 'FULL COLOR PRINTING',
        'description' => 'Make your brand stand out with high-quality full-color printing on all surfaces, inside and out.',
        'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01'
    ],
    [
        'title' => 'ECO-FRIENDLY MATERIALS',
        'description' => 'Made from recyclable and sustainable corrugated cardboard that protects both your products and the planet.',
        'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
    ],
    [
        'title' => 'CUSTOM SIZES',
        'description' => 'Available in any dimension to perfectly fit your products, reducing material waste and shipping costs.',
        'icon' => 'M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4'
    ],
    [
        'title' => 'PREMIUM FINISHES',
        'description' => 'Choose from matte, gloss, soft-touch lamination, spot UV, and embossing for a luxury feel.',
        'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
    ],
    [
        'title' => 'FAST TURNAROUND',
        'description' => 'Rush orders available. Get your custom mailer boxes in as little as 7-10 business days.',
        'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
    ]
];

$specifications = [
    ['label' => 'Material Options', 'value' => 'White or Kraft corrugated cardboard (E-flute, B-flute, or double wall)'],
    ['label' => 'Size Range', 'value' => 'From 4" x 4" x 2" to 18" x 14" x 6" (custom sizes available)'],
    ['label' => 'Printing', 'value' => 'CMYK, PMS/Pantone colors, up to 6-color printing'],
    ['label' => 'Finishes', 'value' => 'Matte, Gloss, Soft-touch lamination, Spot UV, Embossing, Debossing, Foil stamping'],
    ['label' => 'Minimum Order', 'value' => '100 units (lower MOQ available for premium pricing)'],
    ['label' => 'Turnaround', 'value' => 'Standard 12-15 business days, Rush 7-10 business days']
];

$useCases = [
    'E-commerce Shipping',
    'Subscription Boxes',
    'Product Launches',
    'Gift Packaging',
    'Retail Merchandise',
    'Cosmetics & Beauty',
    'Food & Beverages',
    'Electronics'
];
@endphp

@extends('layouts.product')

@section('related_products')
    <div class="grid md:grid-cols-3 gap-8">
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="tuck-top" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">VIEW ALL PRODUCTS</h3>
            </div>
        </a>
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="rigid" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">VIEW ALL PRODUCTS</h3>
            </div>
        </a>
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="reverse-tuck" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">REVERSE TUCK BOXES</h3>
            </div>
        </a>
    </div>
@endsection
