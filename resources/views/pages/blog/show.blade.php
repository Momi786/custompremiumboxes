@extends('layouts.app')

@section('title', $title ?? $post->title . ' - Blog - Custom Premium Boxes')
@section('meta_description', $metaDescription ?? Str::limit($post->excerpt ?? strip_tags($post->content), 155))
@section('meta_keywords', $metaKeywords ?? strtolower($post->title) . ', blog, custom packaging')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "{{ $post->title }}",
    "description": "{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 200) }}",
    @if($post->featured_image_url)
    "image": "{{ $post->featured_image_url }}",
    @endif
    "datePublished": "{{ $post->published_at?->toIso8601String() }}",
    @if($post->author_name)
    "author": {
        "@type": "Person",
        "name": "{{ $post->author_name }}"
    },
    @endif
    "publisher": {
        "@type": "Organization",
        "name": "Custom Premium Boxes",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('aeesets/logo.jpeg') }}"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    }
}
</script>
@endpush

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            @if($post->categories->count() > 0)
            <div class="flex flex-wrap gap-2 justify-center mb-6">
                @foreach($post->categories as $category)
                <a href="{{ route('blog.category', $category->slug) }}" class="bg-primary/20 text-light px-4 py-2 text-sm font-semibold hover:bg-primary/30 transition-colors">
                    {{ $category->name }}
                </a>
                @endforeach
            </div>
            @endif
            
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-light tracking-wide mb-6 text-center">
                {{ strtoupper($post->title) }}
            </h1>
            
            @if($post->excerpt)
            <p class="text-light-muted text-lg text-center mb-8 max-w-2xl mx-auto">
                {{ $post->excerpt }}
            </p>
            @endif
            
            <div class="flex items-center justify-center gap-6 text-light-muted text-sm">
                @if($post->published_at)
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    {{ $post->published_at->format('F d, Y') }}
                </span>
                @endif
                @if($post->author_name)
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    {{ $post->author_name }}
                </span>
                @endif
                @if($post->views_count > 0)
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    {{ number_format($post->views_count) }} views
                </span>
                @endif
            </div>
        </div>
    </section>

    {{-- Featured Image --}}
    @if($post->featured_image_url)
    <section class="bg-light">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </section>
    @endif

    {{-- Content Section --}}
    <section class="py-16 bg-light">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none text-dark-muted">
                {!! $post->content !!}
            </div>
        </div>
    </section>

    {{-- Related Posts --}}
    @if($relatedPosts->count() > 0)
    <section class="py-24 bg-light-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-display text-3xl text-dark tracking-wide mb-12 text-center">
                RELATED <span class="text-primary">POSTS</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedPosts as $index => $relatedPost)
                <article class="bg-light border-2 border-light-muted hover:border-primary transition-all duration-300 card-hover reveal animation-delay-{{ ($index % 3) * 100 }}">
                    <a href="{{ route('blog.show', $relatedPost->slug) }}" class="block">
                        @if($relatedPost->featured_image_url)
                        <div class="w-full h-48 bg-light-soft overflow-hidden">
                            <img src="{{ $relatedPost->featured_image_url }}" alt="{{ $relatedPost->title }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        @else
                        <div class="w-full h-48 bg-dark flex items-center justify-center">
                            <svg class="w-16 h-16 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                        @endif
                        <div class="p-6">
                            @if($relatedPost->categories->count() > 0)
                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach($relatedPost->categories->take(1) as $category)
                                <span class="bg-primary/10 text-primary px-2 py-1 text-xs font-semibold">
                                    {{ $category->name }}
                                </span>
                                @endforeach
                            </div>
                            @endif
                            <h3 class="font-display text-lg text-dark tracking-wider mb-2 hover:text-primary transition-colors line-clamp-2">
                                {{ $relatedPost->title }}
                            </h3>
                            @if($relatedPost->excerpt)
                            <p class="text-dark-muted text-sm mb-4 line-clamp-2">
                                {{ $relatedPost->excerpt }}
                            </p>
                            @endif
                            @if($relatedPost->published_at)
                            <span class="text-dark-muted text-xs">{{ $relatedPost->published_at->format('M d, Y') }}</span>
                            @endif
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection

