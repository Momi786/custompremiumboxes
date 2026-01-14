<footer class="bg-dark text-light">
    {{-- Newsletter Section --}}
    <div class="border-b border-dark-muted">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="font-display text-2xl text-light tracking-wider mb-2">SUBSCRIBE & GET 10% OFF</h3>
                    <p class="text-light-muted">Subscribe to our newsletter for exclusive deals and packaging tips.</p>
                </div>
                <form class="flex flex-col sm:flex-row gap-3">
                    <input 
                        type="email" 
                        placeholder="Enter your email address" 
                        class="flex-1 px-4 py-3 bg-dark-soft border border-dark-muted text-light placeholder-light-muted focus:border-primary focus:outline-none transition-colors"
                        required
                    >
                    <button type="submit" class="btn-primary whitespace-nowrap">
                        Subscribe
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Main Footer --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 lg:gap-12">
            {{-- Brand Column --}}
            <div class="col-span-2 md:col-span-3 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6">
                    <svg class="w-10 h-10 text-primary" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="16" width="32" height="24" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path d="M8 16L24 8L40 16" stroke="currentColor" stroke-width="2" fill="none"/>
                        <line x1="24" y1="8" x2="24" y2="16" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <div class="flex flex-col">
                        <span class="font-display text-xl text-light tracking-wider">CUSTOM PREMIUM</span>
                        <span class="text-primary text-xs tracking-[0.3em] font-medium -mt-1">BOXES</span>
                    </div>
                </a>
                <p class="text-light-muted leading-relaxed mb-6 text-sm">
                    You only have one chance to make a first impression. Let's make it an amazing one with premium custom packaging.
                </p>
                {{-- Social Links --}}
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-dark-soft flex items-center justify-center text-light-muted hover:text-primary hover:bg-dark-muted transition-colors duration-300" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-dark-soft flex items-center justify-center text-light-muted hover:text-primary hover:bg-dark-muted transition-colors duration-300" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-dark-soft flex items-center justify-center text-light-muted hover:text-primary hover:bg-dark-muted transition-colors duration-300" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-dark-soft flex items-center justify-center text-light-muted hover:text-primary hover:bg-dark-muted transition-colors duration-300" aria-label="Pinterest">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg>
                    </a>
                </div>
            </div>
            
            {{-- Products Column --}}
            <div>
                <h4 class="font-display text-lg tracking-wider mb-6 text-light">PRODUCTS</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('products.index') }}" class="text-light-muted hover:text-primary transition-colors duration-300">All Products</a></li>
                    <li><a href="{{ route('products.featured') }}" class="text-light-muted hover:text-primary transition-colors duration-300">Featured Products</a></li>
                </ul>
            </div>
            
            {{-- Categories Column --}}
            @if(isset($categories) && $categories->count() > 0)
            <div>
                <h4 class="font-display text-lg tracking-wider mb-6 text-light">CATEGORIES</h4>
                <ul class="space-y-3 text-sm">
                    @foreach($categories->take(6) as $category)
                    <li><a href="{{ route('categories.show', $category->slug) }}" class="text-light-muted hover:text-primary transition-colors duration-300">{{ $category->name }}</a></li>
                    @endforeach
                    @if($categories->count() > 6)
                    <li><a href="{{ route('categories.index') }}" class="text-primary hover:text-primary-light transition-colors duration-300 font-semibold">View All →</a></li>
                    @endif
                </ul>
            </div>
            @endif
            
            {{-- Company Column --}}
            <div>
                <h4 class="font-display text-lg tracking-wider mb-6 text-light">COMPANY</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="text-light-muted hover:text-primary transition-colors duration-300">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-light-muted hover:text-primary transition-colors duration-300">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light-muted hover:text-primary transition-colors duration-300">Contact Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light-muted hover:text-primary transition-colors duration-300">Get a Quote</a></li>
                    <li><a href="#" class="text-light-muted hover:text-primary transition-colors duration-300">FAQs</a></li>
                    <li><a href="#" class="text-light-muted hover:text-primary transition-colors duration-300">Portfolio</a></li>
                </ul>
            </div>
            
            {{-- Contact Column --}}
            <div>
                <h4 class="font-display text-lg tracking-wider mb-6 text-light">CONTACT US</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-light-muted">123 Packaging Lane,<br>Industrial District, NY 10001</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+18004349599" class="text-light-muted hover:text-primary transition-colors duration-300">(1800)-434-9599</a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:sales@custompremiumboxes.com" class="text-light-muted hover:text-primary transition-colors duration-300">sales@custompremiumboxes.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Trust Badges --}}
    <div class="border-t border-dark-muted">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-wrap justify-center items-center gap-8">
                <div class="flex items-center gap-2 text-light-muted text-sm">
                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Eco-Friendly
                </div>
                <div class="flex items-center gap-2 text-light-muted text-sm">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    100% Secure
                </div>
                <div class="flex items-center gap-2 text-light-muted text-sm">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                    Free Shipping
                </div>
                <div class="flex items-center gap-2 text-light-muted text-sm">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    100% Satisfaction
                </div>
            </div>
        </div>
    </div>
    
    {{-- Bottom Bar --}}
    <div class="border-t border-dark-muted bg-dark-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-light-muted text-sm">
                    &copy; {{ date('Y') }} Custom Premium Boxes. All rights reserved.
                </p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-light-muted hover:text-primary transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-light-muted hover:text-primary transition-colors duration-300">Terms of Service</a>
                    <a href="{{ url('/sitemap.xml') }}" class="text-light-muted hover:text-primary transition-colors duration-300">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
