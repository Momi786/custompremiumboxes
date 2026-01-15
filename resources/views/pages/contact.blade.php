@extends('layouts.app')

@section('title', 'Contact Us - Custom Premium Boxes')
@section('meta_description', 'Get in touch with Custom Premium Boxes for a free quote on custom packaging. Contact our team for questions about mailer boxes, rigid boxes, and more.')
@section('meta_keywords', 'contact custom premium boxes, packaging quote, custom boxes quote, packaging inquiry')

@php
$breadcrumbs = [
    ['label' => 'Home', 'url' => route('home')],
    ['label' => 'Contact', 'url' => route('contact')],
];
@endphp

@section('content')
    {{-- Hero Section --}}
    <section class="bg-dark py-20 lg:py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 right-10 w-64 h-64 border border-light animate-rotate-slow"></div>
            <div class="absolute bottom-10 left-10 w-48 h-48 border border-light animate-rotate-slow" style="animation-direction: reverse;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block text-primary font-semibold tracking-widest text-sm mb-4 opacity-0 animate-fade-in">
                    GET IN TOUCH
                </span>
                <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-light tracking-wide leading-none mb-6 opacity-0 animate-slide-up animation-delay-100">
                    LET'S <span class="text-primary">TALK</span>
                </h1>
                <p class="text-light-muted text-lg md:text-xl leading-relaxed opacity-0 animate-slide-up animation-delay-200">
                    Have a project in mind? Get a free quote or reach out with any questions. Our team is ready to help.
                </p>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-24 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                {{-- Contact Form --}}
                <div class="reveal">
                    <h2 class="font-display text-3xl text-dark tracking-wider mb-8">REQUEST A QUOTE</h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-semibold text-dark mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required 
                                    class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-semibold text-dark mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required 
                                    class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                    class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-dark mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                    class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                            </div>
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-semibold text-dark mb-2">Company Name</label>
                            <input type="text" id="company" name="company" 
                                class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                        </div>
                        
                        <div>
                            <label for="product" class="block text-sm font-semibold text-dark mb-2">Product Interest *</label>
                            <select id="product" name="product" required 
                                class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                                <option value="">Select a product...</option>
                                <option value="mailer-boxes">Mailer Boxes</option>
                                <option value="tuck-top-boxes">Tuck Top Boxes</option>
                                <option value="reverse-tuck-boxes">Reverse Tuck Boxes</option>
                                <option value="bakery-boxes">Bakery Boxes</option>
                                <option value="rigid-boxes">Rigid Boxes</option>
                                <option value="chocolate-boxes">Chocolate Boxes</option>
                                <option value="other">Other / Custom</option>
                            </select>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="quantity" class="block text-sm font-semibold text-dark mb-2">Estimated Quantity</label>
                                <select id="quantity" name="quantity" 
                                    class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                                    <option value="">Select quantity...</option>
                                    <option value="100-500">100 - 500</option>
                                    <option value="500-1000">500 - 1,000</option>
                                    <option value="1000-5000">1,000 - 5,000</option>
                                    <option value="5000-10000">5,000 - 10,000</option>
                                    <option value="10000+">10,000+</option>
                                </select>
                            </div>
                            <div>
                                <label for="timeline" class="block text-sm font-semibold text-dark mb-2">Timeline</label>
                                <select id="timeline" name="timeline" 
                                    class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light">
                                    <option value="">Select timeline...</option>
                                    <option value="asap">ASAP (Rush Order)</option>
                                    <option value="2-weeks">Within 2 weeks</option>
                                    <option value="1-month">Within 1 month</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-semibold text-dark mb-2">Project Details *</label>
                            <textarea id="message" name="message" rows="5" required 
                                placeholder="Tell us about your project, dimensions, materials, and any special requirements..."
                                class="w-full px-4 py-3 border-2 border-light-muted focus:border-primary focus:outline-none transition-colors duration-300 bg-light resize-none"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn-primary w-full justify-center">
                                Submit Request
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                
                {{-- Contact Info --}}
                <div class="reveal animation-delay-200">
                    <h2 class="font-display text-3xl text-dark tracking-wider mb-8">CONTACT INFO</h2>
                    
                    <div class="space-y-8 mb-12">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-dark flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display text-lg text-dark tracking-wider mb-1">ADDRESS</h3>
                                <p class="text-dark-muted">123 Packaging Lane,<br>Industrial District, NY 10001</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-dark flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display text-lg text-dark tracking-wider mb-1">PHONE</h3>
                                <p class="text-dark-muted">
                                    <a href="tel:+18001234567" class="hover:text-primary transition-colors">+1 (800) 123-4567</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-dark flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display text-lg text-dark tracking-wider mb-1">EMAIL</h3>
                                <p class="text-dark-muted">
                                    <a href="mailto:info@custompremiumboxes.com" class="hover:text-primary transition-colors">info@custompremiumboxes.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-dark flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-display text-lg text-dark tracking-wider mb-1">BUSINESS HOURS</h3>
                                <p class="text-dark-muted">Monday - Friday: 8:00 AM - 6:00 PM EST<br>Saturday: 9:00 AM - 2:00 PM EST</p>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Quick Facts --}}
                    <div class="bg-dark p-8">
                        <h3 class="font-display text-xl text-light tracking-wider mb-6">WHY CONTACT US?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center text-light-muted">
                                <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Free quotes within 24 hours
                            </li>
                            <li class="flex items-center text-light-muted">
                                <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Free sample kits available
                            </li>
                            <li class="flex items-center text-light-muted">
                                <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                No minimum order requirements
                            </li>
                            <li class="flex items-center text-light-muted">
                                <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Rush order options available
                            </li>
                            <li class="flex items-center text-light-muted">
                                <svg class="w-5 h-5 text-primary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Dedicated account manager
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-24 bg-light-soft">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-primary font-semibold tracking-widest text-sm">FAQ</span>
                <h2 class="font-display text-4xl text-dark tracking-wide mt-2">
                    COMMON <span class="text-primary">QUESTIONS</span>
                </h2>
            </div>
            
            <div class="space-y-4">
                <div class="bg-light border-2 border-light-muted p-6 reveal">
                    <h3 class="font-display text-lg text-dark tracking-wider mb-2">What is the minimum order quantity?</h3>
                    <p class="text-dark-muted">Our standard minimum is 100 units, but we offer flexible options for smaller quantities at adjusted pricing. Contact us to discuss your specific needs.</p>
                </div>
                
                <div class="bg-light border-2 border-light-muted p-6 reveal animation-delay-100">
                    <h3 class="font-display text-lg text-dark tracking-wider mb-2">How long does production take?</h3>
                    <p class="text-dark-muted">Standard production is 10-15 business days after proof approval. Rush orders can be completed in 5-7 business days for an additional fee.</p>
                </div>
                
                <div class="bg-light border-2 border-light-muted p-6 reveal animation-delay-200">
                    <h3 class="font-display text-lg text-dark tracking-wider mb-2">Can I get a sample before ordering?</h3>
                    <p class="text-dark-muted">Yes! We offer free sample kits that include various box styles and materials. Custom printed samples are also available for a nominal fee.</p>
                </div>
                
                <div class="bg-light border-2 border-light-muted p-6 reveal animation-delay-300">
                    <h3 class="font-display text-lg text-dark tracking-wider mb-2">Do you offer design services?</h3>
                    <p class="text-dark-muted">Absolutely! Our design team can help create custom artwork or adapt your existing designs for print. Basic design services are complimentary with orders over 500 units.</p>
                </div>
            </div>
        </div>
    </section>
@endsection






