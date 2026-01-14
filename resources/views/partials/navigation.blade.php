{{-- Top Banner --}}
<div class="bg-primary text-light py-2.5 text-center text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="inline">
            We're actively helping customers reduce packaging costs —
            <a href="{{ route('contact') }}" class="font-semibold underline hover:text-light-soft transition-colors">explore our approach</a>
        </p>
    </div>
</div>

{{-- Main Header --}}
<header class="bg-light sticky top-0 z-50 shadow-sm">
    {{-- Top Bar --}}
    <div class="border-b border-light-muted/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-9 text-xs">
                {{-- Top Links --}}
                <div class="hidden md:flex items-center gap-3 text-dark-muted">
                    <a href="#" class="hover:text-primary transition-colors font-medium">BLOG</a>
                    <span class="text-light-muted text-xs">|</span>
                    <a href="{{ route('contact') }}" class="hover:text-primary transition-colors font-medium">CONTACT US</a>
                    <span class="text-light-muted text-xs">|</span>
                    {{-- <a href="#" class="hover:text-primary transition-colors font-medium">SIGN IN</a>
                    <span class="text-light-muted text-xs">|</span>
                    <a href="#" class="hover:text-primary transition-colors font-medium">CREATE AN ACCOUNT</a> --}}
                </div>
                <div class="md:hidden"></div>

                {{-- Contact Info (Top Bar) - Hidden on large screens, shown in main nav --}}
                <div class="hidden md:block lg:hidden text-right">
                    <div class="text-dark-muted text-xs mb-0.5">Call us toll free:</div>
                    <a href="tel:+18004349599" class="text-primary font-bold text-lg hover:text-primary-dark transition-colors block leading-none">1-800-434-9599</a>
                    <div class="text-dark-muted text-xs mt-0.5">Speak to our experts • 9:30am - 6:30pm EST</div>
                </div>
                <a href="tel:+18004349599" class="md:hidden text-primary font-bold text-sm hover:text-primary-dark transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-1.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>1-800-434-9599</span>
                </a>
            </div>
        </div>
    </div>

    {{-- Main Navigation Bar --}}
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
        <div class="flex items-center justify-between h-24 py-3">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group flex-shrink-0" aria-label="Custom Premium Boxes Home">
                <svg class="w-14 h-14 text-primary transition-transform duration-300 group-hover:scale-110" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8" y="16" width="32" height="24" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw"/>
                    <path d="M8 16L24 8L40 16" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
                    <line x1="24" y1="8" x2="24" y2="16" stroke="currentColor" stroke-width="2" class="svg-draw-delayed"/>
                    <rect x="12" y="20" width="24" height="16" fill="currentColor" opacity="0.2"/>
                </svg>
                <div class="flex flex-col leading-tight">
                    <span class="font-display text-2xl sm:text-3xl text-dark tracking-wider font-bold">CUSTOM PREMIUM</span>
                    <span class="text-dark text-xs sm:text-sm tracking-wider font-normal mt-0.5">BOXES</span>
                </div>
            </a>

            {{-- Search Bar (Desktop) --}}
            <div class="hidden lg:flex flex-1 max-w-lg mx-8">
                <form action="{{ route('products.index') }}" method="GET" class="w-full">
                    <div class="relative">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search..."
                            class="w-full px-4 py-2.5 pr-11 bg-light border border-light-muted rounded-lg text-dark placeholder-dark-muted focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-sm"
                        >
                        <button type="submit" class="absolute right-2.5 top-1/2 -translate-y-1/2 p-1.5 text-dark-muted hover:text-primary transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            {{-- Contact & CTA (Desktop) --}}
            <div class="hidden lg:flex items-center gap-6 flex-shrink-0">
                <div class="text-right">
                    <div class="text-dark-muted text-xs mb-1 leading-tight">Call us toll free:</div>
                    <a href="tel:+18004349599" class="text-primary font-bold text-2xl hover:text-primary-dark transition-colors block leading-none tracking-tight">1-800-434-9599</a>
                    <div class="text-dark-muted text-xs mt-1 leading-tight">9:30am - 6:30pm EST</div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary whitespace-nowrap px-6 py-2.5 text-sm font-semibold rounded-lg">
                    Request a Quote
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 text-dark hover:text-primary transition-colors duration-300 z-50" aria-label="Toggle menu" aria-expanded="false">
                <svg id="mobile-menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Main Navigation Links (Desktop) --}}
        <div class="hidden lg:flex items-center gap-0.5 pb-3 border-t border-light-muted/50 pt-3">
            <a href="{{ route('home') }}" class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium {{ request()->routeIs('home') ? 'text-primary' : '' }}">
                Home
            </a>

            {{-- Products Dropdown --}}
            <div class="relative group">
                <button class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium flex items-center gap-1">
                    Products
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[calc(100vw-2rem)] sm:w-[500px] lg:w-[600px] xl:w-[700px] bg-light border border-light-muted opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform -translate-y-2 group-hover:translate-y-0 shadow-2xl z-50 rounded-lg overflow-hidden mt-1">
                    <div class="p-4 sm:p-6 max-h-[80vh] overflow-y-auto">
                        @php
                            $featuredProducts = isset($featuredProducts) ? $featuredProducts->take(8) : collect();
                        @endphp

                        {{-- Featured Products Section --}}
                        @if($featuredProducts->count() > 0)
                        <div>
                            <h3 class="text-primary font-display text-base sm:text-lg tracking-wider mb-4 pb-2 border-b border-light-muted">FEATURED PRODUCTS</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                                @foreach($featuredProducts as $product)
                                <a href="{{ route('products.show', $product->slug) }}" class="group/item block">
                                    <div class="bg-light-soft rounded-lg p-2 sm:p-3 border border-light-muted hover:border-primary transition-all duration-200 hover:shadow-lg">
                                        <div class="aspect-square w-full mb-2 bg-light rounded-md overflow-hidden">
                                            @if($product->image_url)
                                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform duration-300" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="w-full h-full bg-light-soft hidden items-center justify-center">
                                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                                </svg>
                                            </div>
                                            @else
                                            <div class="w-full h-full bg-light-soft flex items-center justify-center">
                                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                                </svg>
                                            </div>
                                            @endif
                                        </div>
                                        <h4 class="font-semibold text-dark text-xs sm:text-sm mb-1 group-hover/item:text-primary transition-colors line-clamp-1">{{ $product->name }}</h4>
                                        @if($product->short_description)
                                        <p class="text-xs text-dark-muted line-clamp-2 hidden sm:block">{{ Str::limit($product->short_description, 50) }}</p>
                                        @endif
                                        <div class="flex items-center justify-between mt-1.5">
                                            <span class="text-primary text-xs font-semibold">★</span>
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-primary opacity-0 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="mt-4 pt-4 border-t border-light-muted">
                                <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold text-sm transition-colors">
                                    View All Products
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="text-center py-8">
                            <p class="text-dark-muted text-sm">No featured products available.</p>
                            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold text-sm mt-2 transition-colors">
                                View All Products
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Categories Dropdown --}}
            @if(isset($categories) && $categories->count() > 0)
            <div class="relative group">
                <button class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium flex items-center gap-1">
                    Categories
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[calc(100vw-2rem)] sm:w-[500px] lg:w-[600px] xl:w-[700px] bg-light border border-light-muted opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform -translate-y-2 group-hover:translate-y-0 shadow-2xl z-50 rounded-lg overflow-hidden mt-1">
                    <div class="p-4 sm:p-6 max-h-[80vh] overflow-y-auto">
                        @php
                            $featuredCategories = $categories->where('is_featured', true)->take(8);
                        @endphp

                        {{-- Featured Categories Section --}}
                        @if($featuredCategories->count() > 0)
                        <div>
                            <h3 class="text-primary font-display text-base sm:text-lg tracking-wider mb-4 pb-2 border-b border-light-muted">FEATURED CATEGORIES</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                                @foreach($featuredCategories as $category)
                                <a href="{{ route('categories.show', $category->slug) }}" class="group/item block">
                                    <div class="bg-light-soft rounded-lg p-2 sm:p-3 border border-light-muted hover:border-primary transition-all duration-200 hover:shadow-lg">
                                        <div class="aspect-square w-full mb-2 bg-light rounded-md overflow-hidden">
                                            @if($category->image_url)
                                            <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="w-full h-full object-cover group-hover/item:scale-110 transition-transform duration-300" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="w-full h-full bg-light-soft hidden items-center justify-center">
                                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                                </svg>
                                            </div>
                                            @else
                                            <div class="w-full h-full bg-light-soft flex items-center justify-center">
                                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                                </svg>
                                            </div>
                                            @endif
                                        </div>
                                        <h4 class="font-semibold text-dark text-xs sm:text-sm mb-1 group-hover/item:text-primary transition-colors line-clamp-1">{{ $category->name }}</h4>
                                        @if($category->description)
                                        <p class="text-xs text-dark-muted line-clamp-2 hidden sm:block">{{ Str::limit($category->description, 50) }}</p>
                                        @endif
                                        <div class="flex items-center justify-between mt-1.5">
                                            <span class="text-primary text-xs font-semibold">★</span>
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-primary opacity-0 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="mt-4 pt-4 border-t border-light-muted">
                                <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold text-sm transition-colors">
                                    View All Categories
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="text-center py-8">
                            <p class="text-dark-muted text-sm">No featured categories available.</p>
                            <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold text-sm mt-2 transition-colors">
                                View All Categories
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif

            <a href="{{ route('why-custom-premium-boxes') }}" class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium {{ request()->routeIs('why-custom-premium-boxes') ? 'text-primary' : '' }}">
                Why Custom Premium Boxes
            </a>
            <a href="{{ route('why-custom-premium-boxes') }}" class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium {{ request()->routeIs('why-custom-premium-boxes') ? 'text-primary' : '' }}">
                Why Custom Premium Boxes
            </a>
            <a href="{{ route('about') }}" class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium {{ request()->routeIs('about') ? 'text-primary' : '' }}">
                About
            </a>
            <a href="{{ route('contact') }}" class="px-4 py-2 text-dark hover:text-primary transition-colors duration-300 font-medium {{ request()->routeIs('contact') ? 'text-primary' : '' }}">
                Contact
            </a>
        </div>
    </nav>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 bg-light z-50 overflow-y-auto">
        {{-- Mobile Menu Header --}}
        <div class="sticky top-0 bg-light border-b border-light-muted z-10">
            <div class="flex items-center justify-between px-4 sm:px-6 py-4">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center space-x-3" id="mobile-menu-logo-link">
                    <svg class="w-12 h-12 text-primary" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="16" width="32" height="24" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path d="M8 16L24 8L40 16" stroke="currentColor" stroke-width="2" fill="none"/>
                        <line x1="24" y1="8" x2="24" y2="16" stroke="currentColor" stroke-width="2"/>
                        <rect x="12" y="20" width="24" height="16" fill="currentColor" opacity="0.2"/>
                    </svg>
                    <div class="flex flex-col leading-tight">
                        <span class="font-display text-xl text-dark tracking-wider font-bold">CUSTOM PREMIUM</span>
                        <span class="text-dark text-xs tracking-wider font-normal mt-0.5">BOXES</span>
                    </div>
                </a>

                {{-- Close Button --}}
                <button type="button" id="mobile-menu-close" class="p-2 text-dark hover:text-primary transition-colors" aria-label="Close menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu Content --}}
        <div class="px-4 sm:px-6 py-6">
            {{-- Mobile Search --}}
            <form action="{{ route('products.index') }}" method="GET" class="mb-6">
                <div class="relative">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search..."
                        class="w-full px-4 py-3 pr-12 bg-light border border-light-muted rounded-lg text-dark placeholder-dark-muted focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                    >
                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 p-1.5 text-dark-muted hover:text-primary transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </form>

            <div class="flex flex-col space-y-0">
                <a href="{{ route('home') }}" class="px-4 py-3 text-dark hover:text-primary hover:bg-light-soft transition-colors duration-200 font-medium rounded-lg {{ request()->routeIs('home') ? 'text-primary bg-light-soft' : '' }}">Home</a>

                <span class="px-4 py-3 text-dark-muted text-xs font-semibold tracking-wider uppercase">PRODUCTS</span>
                @if(isset($featuredProducts) && $featuredProducts->count() > 0)
                @foreach($featuredProducts->take(4) as $product)
                <a href="{{ route('products.show', $product->slug) }}" class="flex items-center gap-3 px-6 py-2.5 text-dark hover:text-primary hover:bg-light-soft transition-colors duration-200 rounded-lg">
                    @if($product->image_url)
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-10 h-10 rounded-md object-cover flex-shrink-0" onerror="this.style.display='none';">
                    @endif
                    <span class="font-medium">{{ $product->name }}</span>
                </a>
                @endforeach
                @endif
                <a href="{{ route('products.index') }}" class="px-6 py-2.5 text-primary hover:bg-light-soft transition-colors duration-200 font-semibold rounded-lg">View All Products →</a>

                @if(isset($categories) && $categories->count() > 0)
                <span class="px-4 py-3 text-dark-muted text-xs font-semibold tracking-wider uppercase mt-2">CATEGORIES</span>
                @foreach($categories->take(6) as $category)
                <a href="{{ route('categories.show', $category->slug) }}" class="flex items-center gap-3 px-6 py-2.5 text-dark hover:text-primary hover:bg-light-soft transition-colors duration-200 rounded-lg">
                    @if($category->image_url)
                    <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="w-10 h-10 rounded-md object-cover flex-shrink-0" onerror="this.style.display='none';">
                    @endif
                    <span class="font-medium">{{ $category->name }}</span>
                </a>
                @endforeach
                <a href="{{ route('categories.index') }}" class="px-6 py-2.5 text-primary hover:bg-light-soft transition-colors duration-200 font-semibold rounded-lg">View All Categories →</a>
                @endif

                <a href="{{ route('why-custom-premium-boxes') }}" class="px-4 py-3 text-dark hover:text-primary hover:bg-light-soft transition-colors duration-200 font-medium rounded-lg mt-2 {{ request()->routeIs('why-custom-premium-boxes') ? 'text-primary bg-light-soft' : '' }}">Why Custom Premium Boxes</a>
                <a href="{{ route('about') }}" class="px-4 py-3 text-dark hover:text-primary hover:bg-light-soft transition-colors duration-200 font-medium rounded-lg {{ request()->routeIs('about') ? 'text-primary bg-light-soft' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="px-4 py-3 text-dark hover:text-primary hover:bg-light-soft transition-colors duration-200 font-medium rounded-lg {{ request()->routeIs('contact') ? 'text-primary bg-light-soft' : '' }}">Contact</a>

                <div class="px-4 pt-6 pb-4">
                    <a href="{{ route('contact') }}" class="btn-primary w-full justify-center text-center block">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Inline script for mobile menu (fallback) --}}
<script>
(function() {
    'use strict';

    function closeMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenuIcon = document.getElementById('mobile-menu-icon');

        if (mobileMenu) {
            mobileMenu.classList.add('hidden');
        }
        if (mobileMenuBtn) {
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }
        if (mobileMenuIcon) {
            mobileMenuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
        }
        // Prevent body scroll when menu is closed
        document.body.style.overflow = '';
    }

    function openMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenuIcon = document.getElementById('mobile-menu-icon');

        if (mobileMenu) {
            mobileMenu.classList.remove('hidden');
        }
        if (mobileMenuBtn) {
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
        }
        if (mobileMenuIcon) {
            mobileMenuIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
        }
        // Prevent body scroll when menu is open
        document.body.style.overflow = 'hidden';
    }

    function initMobileMenu() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuIcon = document.getElementById('mobile-menu-icon');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        if (!mobileMenuBtn || !mobileMenu || !mobileMenuIcon) {
            return;
        }

        // Toggle menu on button click
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';

            if (isExpanded) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        // Close menu on close button click
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function(e) {
                e.preventDefault();
                closeMobileMenu();
            });
        }

        // Close menu when clicking on menu links
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                closeMobileMenu();
            });
        });

        // Close menu when clicking on logo link
        const logoLink = document.getElementById('mobile-menu-logo-link');
        if (logoLink) {
            logoLink.addEventListener('click', function() {
                closeMobileMenu();
            });
        }

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                closeMobileMenu();
            }
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileMenu);
    } else {
        initMobileMenu();
    }
})();
</script>
