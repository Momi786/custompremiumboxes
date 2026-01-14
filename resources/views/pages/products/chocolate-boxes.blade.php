@php
$title = 'Chocolate Boxes';
$subtitle = 'CONFECTIONERY PACKAGING EXCELLENCE';
$description = 'Present your artisan chocolates in packaging as exquisite as the confections inside. Our chocolate boxes are designed to delight and impress.';
$metaDescription = 'Custom chocolate boxes for truffles, gift assortments, and artisan confections. Food-safe, elegant presentation with dividers. Get your quote!';
$metaKeywords = 'chocolate boxes, truffle boxes, confectionery packaging, gift chocolate boxes, candy boxes, chocolate gift packaging';
$boxType = 'chocolate';

$features = [
    [
        'title' => 'FOOD-GRADE QUALITY',
        'description' => 'FDA-approved materials ensure your chocolates remain fresh and safe for consumption.',
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
    ],
    [
        'title' => 'CUSTOM DIVIDERS',
        'description' => 'Precision-cut inserts and dividers keep each piece perfectly positioned and protected.',
        'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'
    ],
    [
        'title' => 'ELEGANT PRESENTATION',
        'description' => 'Luxurious materials and finishes create a gift-worthy presentation for your confections.',
        'icon' => 'M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7'
    ],
    [
        'title' => 'TEMPERATURE CONTROL',
        'description' => 'Insulated options available to protect chocolates during shipping and warm weather.',
        'icon' => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7'
    ],
    [
        'title' => 'RIBBON & BOW OPTIONS',
        'description' => 'Add satin ribbons, bows, or magnetic closures for an unforgettable gifting experience.',
        'icon' => 'M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7'
    ],
    [
        'title' => 'LUXURY FINISHES',
        'description' => 'Gold foil, embossing, and specialty papers elevate your chocolates to luxury status.',
        'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
    ]
];

$specifications = [
    ['label' => 'Material Options', 'value' => 'Food-grade cardboard, rigid board, specialty papers'],
    ['label' => 'Size Range', 'value' => '2-piece to 48-piece configurations (custom layouts available)'],
    ['label' => 'Insert Options', 'value' => 'Gold/silver/colored paper cups, vacuum-formed trays, custom cavities'],
    ['label' => 'Printing', 'value' => 'Food-safe inks, metallic printing, full color CMYK'],
    ['label' => 'Finishes', 'value' => 'Hot foil stamping, embossing, soft-touch, satin/matte lamination'],
    ['label' => 'Turnaround', 'value' => 'Standard 12-16 business days, Rush 8-10 business days']
];

$useCases = [
    'Artisan Truffles',
    'Gift Assortments',
    'Wedding Favors',
    'Corporate Gifts',
    'Holiday Collections',
    'Valentine\'s Day',
    'Luxury Confections',
    'Seasonal Editions'
];
@endphp

@extends('layouts.product')

@section('related_products')
    <div class="grid md:grid-cols-3 gap-8">
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="bakery" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">BAKERY BOXES</h3>
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
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-light-soft p-6 text-center card-hover border-2 border-transparent hover:border-primary">
                <div class="w-24 h-24 mx-auto mb-4 text-dark group-hover:text-primary transition-colors duration-300">
                    <x-box-svg type="mailer" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">MAILER BOXES</h3>
            </div>
        </a>
    </div>
@endsection
