@php
$title = 'Tuck Top Boxes';
$subtitle = 'VERSATILE RETAIL PACKAGING';
$description = 'Professional tuck top boxes that combine easy access with elegant presentation. Perfect for retail products that need to stand out on the shelf.';
$metaDescription = 'Custom tuck top boxes for retail and product packaging. Easy-access design with premium printing options. Request your free quote today!';
$metaKeywords = 'tuck top boxes, custom tuck boxes, retail packaging, product boxes, tuck end boxes, folding cartons';
$boxType = 'tuck-top';

$features = [
    [
        'title' => 'EASY ACCESS DESIGN',
        'description' => 'Tuck top closure provides quick and easy access while maintaining a clean, professional appearance.',
        'icon' => 'M5 15l7-7 7 7'
    ],
    [
        'title' => 'RETAIL READY',
        'description' => 'Perfect for retail display with optional hanging tabs and window cutouts to showcase your products.',
        'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z'
    ],
    [
        'title' => 'VERSATILE SIZING',
        'description' => 'Available in a wide range of sizes to accommodate everything from small cosmetics to larger retail items.',
        'icon' => 'M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4'
    ],
    [
        'title' => 'STACKABLE',
        'description' => 'Designed for efficient stacking in storage and on retail shelves, maximizing space utilization.',
        'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'
    ],
    [
        'title' => 'PREMIUM PRINTING',
        'description' => 'High-resolution printing brings your brand graphics to life with vibrant colors and sharp details.',
        'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'
    ],
    [
        'title' => 'DURABLE CONSTRUCTION',
        'description' => 'Made from sturdy cardstock that protects your products while maintaining structural integrity.',
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
    ]
];

$specifications = [
    ['label' => 'Material Options', 'value' => '14pt to 24pt cardstock, SBS (Solid Bleached Sulfate), Kraft'],
    ['label' => 'Size Range', 'value' => 'From 2" x 2" x 1" to 12" x 10" x 8" (custom sizes available)'],
    ['label' => 'Printing', 'value' => 'CMYK full color, PMS spot colors, inside printing available'],
    ['label' => 'Finishes', 'value' => 'Matte, Gloss, Aqueous coating, Spot UV, Foil stamping'],
    ['label' => 'Add-ons', 'value' => 'Window patches, hang tabs, inserts, die-cut shapes'],
    ['label' => 'Turnaround', 'value' => 'Standard 10-14 business days, Rush 5-7 business days']
];

$useCases = [
    'Retail Products',
    'Cosmetics',
    'Pharmaceuticals',
    'Electronics',
    'Toys & Games',
    'Apparel Accessories',
    'Health Products',
    'Gift Items'
];
@endphp

@extends('layouts.product')

@section('related_products')
    <div class="grid md:grid-cols-3 gap-8">
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
                    <x-box-svg type="reverse-tuck" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">REVERSE TUCK BOXES</h3>
            </div>
        </a>
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="bakery" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">BAKERY BOXES</h3>
            </div>
        </a>
    </div>
@endsection
