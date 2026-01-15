<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- SEO Meta Tags --}}
    <title>@yield('title', 'Custom Premium Boxes - Premium Custom Packaging Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'Premium custom packaging solutions for your business. Mailer boxes, rigid boxes, bakery boxes, and more. High-quality printing with fast turnaround.')">
    <meta name="keywords" content="@yield('meta_keywords', 'custom boxes, packaging, mailer boxes, rigid boxes, bakery boxes, chocolate boxes, custom printing, premium packaging')">
    <meta name="author" content="Custom Premium Boxes">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Social Media --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Custom Premium Boxes - Premium Custom Packaging Solutions')">
    <meta property="og:description" content="@yield('og_description', 'Premium custom packaging solutions for your business. High-quality printing with fast turnaround.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Custom Premium Boxes')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Premium custom packaging solutions for your business.')">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon --}}
    @php
        $favicon = \App\Models\Settings::get('favicon');
    @endphp
    @if($favicon)
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $favicon) }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @endif

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js for interactivity --}}
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>

    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Custom Premium Boxes",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "description": "Premium custom packaging solutions for businesses",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+1-800-XXX-XXXX",
            "contactType": "customer service"
        }
    }
    </script>

    @stack('schema')
    @stack('styles')
</head>
<body class="font-sans antialiased bg-light text-dark">
    {{-- Skip to main content for accessibility --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary text-light px-4 py-2 z-50">
        Skip to main content
    </a>

    {{-- Navigation --}}
    @include('partials.navigation')

    {{-- Breadcrumbs --}}
    @if(isset($breadcrumbs) && count($breadcrumbs) > 0)
        <x-breadcrumbs :items="$breadcrumbs" />
    @endif

    {{-- Main Content --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scroll Reveal Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for scroll animations
            const reveals = document.querySelectorAll('.reveal');

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            reveals.forEach(reveal => revealObserver.observe(reveal));

            // Mobile menu toggle
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    menuBtn.setAttribute('aria-expanded',
                        menuBtn.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
                    );
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>

