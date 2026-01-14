@php
$title = 'Reverse Tuck Boxes';
$subtitle = 'PROFESSIONAL PRODUCT PACKAGING';
$description = 'Elegant reverse tuck boxes with secure opposite-end closures. Perfect for cosmetics, electronics, and premium products that demand a sophisticated presentation.';
$metaDescription = 'Custom reverse tuck boxes with professional appearance and tamper-evident design. Ideal for cosmetics, electronics, and premium products. Get your quote!';
$metaKeywords = 'reverse tuck boxes, custom reverse tuck, RTE boxes, cosmetic packaging, electronics packaging, premium product boxes';
$boxType = 'reverse-tuck';

$features = [
    [
        'title' => 'OPPOSITE END CLOSURES',
        'description' => 'Tuck flaps on opposite ends create a balanced, secure closure that prevents accidental opening.',
        'icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4'
    ],
    [
        'title' => 'PROFESSIONAL APPEARANCE',
        'description' => 'Clean lines and symmetrical design give your products a polished, high-end presentation.',
        'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'
    ],
    [
        'title' => 'TAMPER EVIDENT',
        'description' => 'The reverse tuck design makes it easy to identify if a package has been opened, adding security.',
        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
    ],
    [
        'title' => 'IDEAL FOR DISPLAY',
        'description' => 'Stands upright perfectly on retail shelves, maximizing brand visibility and product appeal.',
        'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
    ],
    [
        'title' => 'CUSTOMIZABLE INSERTS',
        'description' => 'Add custom inserts and dividers to secure products and create an impressive unboxing experience.',
        'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'
    ],
    [
        'title' => 'PREMIUM MATERIALS',
        'description' => 'Choose from various paper stocks and finishes to match your brand aesthetic and product value.',
        'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
    ]
];

$specifications = [
    ['label' => 'Material Options', 'value' => '16pt to 24pt cardstock, C1S, C2S, Kraft, Corrugated'],
    ['label' => 'Size Range', 'value' => 'From 1.5" x 1.5" x 3" to 10" x 8" x 12" (custom sizes available)'],
    ['label' => 'Printing', 'value' => 'Full color CMYK, 1-4 PMS colors, inside/outside printing'],
    ['label' => 'Finishes', 'value' => 'Matte, Gloss, Satin, Soft-touch, Spot UV, Embossing, Foil'],
    ['label' => 'Options', 'value' => 'Window cutouts, hang tabs, perforations, custom die-cuts'],
    ['label' => 'Turnaround', 'value' => 'Standard 10-14 business days, Rush 5-7 business days']
];

$useCases = [
    'Cosmetics & Beauty',
    'Electronics',
    'Pharmaceuticals',
    'Supplements',
    'Perfumes',
    'Candles',
    'Tech Accessories',
    'Premium Products'
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
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">TUCK TOP BOXES</h3>
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
                    <x-box-svg type="chocolate" />
                </div>
                <h3 class="font-display text-lg text-dark tracking-wider group-hover:text-primary transition-colors">CHOCOLATE BOXES</h3>
            </div>
        </a>
    </div>
@endsection
