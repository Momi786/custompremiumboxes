@props(['items' => []])

@if(count($items) > 0)
<nav aria-label="Breadcrumb" class="bg-light-soft border-b border-light-muted">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <ol class="flex items-center gap-2 py-3 text-xs sm:text-sm">
            @foreach($items as $index => $item)
                @if($index < count($items) - 1)
                    <li class="flex items-center">
                        <a href="{{ $item['url'] }}" class="text-dark-muted hover:text-primary transition-colors font-medium uppercase tracking-wider">
                            {{ $item['label'] }}
                        </a>
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-2 text-dark-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </li>
                @else
                    <li class="flex items-center">
                        <span class="text-dark font-semibold uppercase tracking-wider">{{ $item['label'] }}</span>
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>
@endif

