@props(['type' => 'mailer', 'class' => 'w-full h-full'])

@switch($type)
    @case('mailer')
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="30" y="80" width="140" height="90" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw"/>
            <path d="M30 80 L100 40 L170 80" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw-delayed"/>
            <line x1="100" y1="40" x2="100" y2="80" stroke="currentColor" stroke-width="3" class="svg-draw-delayed"/>
            <line x1="30" y1="110" x2="170" y2="110" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
            <line x1="30" y1="140" x2="170" y2="140" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
            <path d="M60 80 L60 65 L140 65 L140 80" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <circle cx="100" cy="125" r="15" stroke="currentColor" stroke-width="2" fill="none" class="animate-pulse-subtle"/>
        </svg>
        @break
    @case('tuck-top')
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="40" y="50" width="120" height="130" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw"/>
            <path d="M40 50 L40 30 L160 30 L160 50" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw-delayed"/>
            <path d="M60 50 L60 40 L140 40 L140 50" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <line x1="40" y1="90" x2="160" y2="90" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
            <rect x="70" y="110" width="60" height="50" stroke="currentColor" stroke-width="2" fill="none" class="animate-pulse-subtle"/>
        </svg>
        @break
    @case('reverse-tuck')
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="40" y="30" width="120" height="140" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw"/>
            <path d="M40 30 L60 10 L140 10 L160 30" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <path d="M40 170 L60 190 L140 190 L160 170" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <line x1="80" y1="30" x2="80" y2="170" stroke="currentColor" stroke-width="1.5" opacity="0.3"/>
            <line x1="120" y1="30" x2="120" y2="170" stroke="currentColor" stroke-width="1.5" opacity="0.3"/>
            <circle cx="100" cy="100" r="20" stroke="currentColor" stroke-width="2" fill="none" class="animate-pulse-subtle"/>
        </svg>
        @break
    @case('bakery')
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="30" y="80" width="140" height="100" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw"/>
            <path d="M30 80 Q100 20 170 80" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw-delayed"/>
            <ellipse cx="100" cy="60" rx="40" ry="20" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <path d="M80 45 L80 35 L120 35 L120 45" stroke="currentColor" stroke-width="2" fill="none" class="animate-float"/>
            <line x1="50" y1="120" x2="150" y2="120" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
            <line x1="50" y1="150" x2="150" y2="150" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
        </svg>
        @break
    @case('rigid')
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="25" y="40" width="150" height="130" stroke="currentColor" stroke-width="4" fill="none" class="svg-draw"/>
            <rect x="35" y="50" width="130" height="110" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <line x1="25" y1="70" x2="175" y2="70" stroke="currentColor" stroke-width="2"/>
            <line x1="35" y1="70" x2="165" y2="70" stroke="currentColor" stroke-width="1.5" opacity="0.5"/>
            <rect x="70" y="90" width="60" height="50" stroke="currentColor" stroke-width="2" fill="none" class="animate-pulse-subtle"/>
            <line x1="25" y1="50" x2="35" y2="50" stroke="currentColor" stroke-width="2"/>
            <line x1="165" y1="50" x2="175" y2="50" stroke="currentColor" stroke-width="2"/>
        </svg>
        @break
    @case('chocolate')
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="30" y="60" width="140" height="100" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw"/>
            <rect x="25" y="50" width="150" height="20" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw-delayed"/>
            <rect x="30" y="95" width="140" height="15" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <rect x="92" y="50" width="16" height="110" stroke="currentColor" stroke-width="2" fill="none" class="svg-draw-delayed"/>
            <ellipse cx="85" cy="55" rx="12" ry="8" stroke="currentColor" stroke-width="2" fill="none" class="animate-float"/>
            <ellipse cx="115" cy="55" rx="12" ry="8" stroke="currentColor" stroke-width="2" fill="none" class="animate-float"/>
            <line x1="60" y1="120" x2="60" y2="150" stroke="currentColor" stroke-width="1" opacity="0.4"/>
            <line x1="100" y1="120" x2="100" y2="150" stroke="currentColor" stroke-width="1" opacity="0.4"/>
            <line x1="140" y1="120" x2="140" y2="150" stroke="currentColor" stroke-width="1" opacity="0.4"/>
        </svg>
        @break
    @default
        <svg class="{{ $class }}" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="30" y="80" width="140" height="90" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw"/>
            <path d="M30 80 L100 40 L170 80" stroke="currentColor" stroke-width="3" fill="none" class="svg-draw-delayed"/>
            <line x1="100" y1="40" x2="100" y2="80" stroke="currentColor" stroke-width="3" class="svg-draw-delayed"/>
            <circle cx="100" cy="125" r="15" stroke="currentColor" stroke-width="2" fill="none" class="animate-pulse-subtle"/>
        </svg>
@endswitch
