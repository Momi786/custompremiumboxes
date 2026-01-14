@php
$title = 'Rigid Boxes';
$subtitle = 'LUXURY PACKAGING EXPERIENCE';
$description = 'Create an unforgettable unboxing experience with our premium rigid boxes. Handcrafted with attention to detail, these boxes are the ultimate expression of luxury packaging.';
$metaDescription = 'Custom luxury rigid boxes for premium products, jewelry, and gifts. Magnetic closures, custom inserts, and premium finishes. Request your quote today!';
$metaKeywords = 'rigid boxes, luxury packaging, gift boxes, jewelry boxes, premium packaging, magnetic boxes, set-up boxes';
$boxType = 'rigid';

$features = [
    [
        'title' => 'LUXURY CONSTRUCTION',
        'description' => 'Rigid chipboard wrapped in premium paper creates an unmistakable premium feel that elevates any product.',
        'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
    ],
    [
        'title' => 'EXCEPTIONAL DURABILITY',
        'description' => 'Heavy-duty construction protects valuable items and maintains shape even after repeated use.',
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
    ],
    [
        'title' => 'MAGNETIC CLOSURES',
        'description' => 'Hidden magnetic closures provide a satisfying snap and secure seal for an elevated unboxing experience.',
        'icon' => 'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1'
    ],
    [
        'title' => 'CUSTOM INSERTS',
        'description' => 'Foam, velvet, or satin inserts can be customized to cradle your products perfectly.',
        'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'
    ],
    [
        'title' => 'PREMIUM FINISHES',
        'description' => 'Choose from embossing, debossing, foil stamping, and specialty papers for ultimate luxury.',
        'icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'
    ],
    [
        'title' => 'REUSABLE DESIGN',
        'description' => 'Built to last, our rigid boxes become keepsakes that customers treasure long after purchase.',
        'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'
    ]
];

$specifications = [
    ['label' => 'Material Options', 'value' => '1.5mm to 3mm rigid chipboard, wrapped with specialty papers'],
    ['label' => 'Size Range', 'value' => 'From 3" x 3" x 1" to 18" x 14" x 6" (custom sizes available)'],
    ['label' => 'Closure Types', 'value' => 'Lift-off lid, hinged lid, magnetic closure, ribbon pull'],
    ['label' => 'Finishes', 'value' => 'Soft-touch, textured paper, hot foil, emboss/deboss, spot UV'],
    ['label' => 'Interior Options', 'value' => 'EVA foam, flocked inserts, satin lining, custom die-cut trays'],
    ['label' => 'Turnaround', 'value' => 'Standard 15-20 business days, Rush 10-12 business days']
];

$useCases = [
    'Luxury Jewelry',
    'Premium Watches',
    'High-End Electronics',
    'Perfumes & Cosmetics',
    'Corporate Gifts',
    'Wine & Spirits',
    'Fashion Accessories',
    'Limited Editions'
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
                    <x-box-svg type="reverse-tuck" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">REVERSE TUCK BOXES</h3>
            </div>
        </a>
    </div>
@endsection
