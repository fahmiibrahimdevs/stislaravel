@props(['route' => null, 'href' => '#', 'title', 'icon' => null, 'linkClass' => ''])
@php
    $isActive = $route ? request()->routeIs($route) : false;
    $url = $route ? route($route) : $href;
@endphp
<li class="{{ $isActive ? 'active' : '' }}">
    <a class="nav-link {{ $linkClass }}" href="{{ $url }}">
        @if($icon)
            <i class="{{ $icon }}"></i>
            <span>{{ $title }}</span>
        @else
            {{ $title }}
        @endif
    </a>
</li>
