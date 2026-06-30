@props(['title', 'icon', 'active' => null])
@php
    $isActive = $active ? request()->routeIs($active) : false;
@endphp
<li class="nav-item dropdown {{ $isActive ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="{{ $icon }}"></i><span>{{ $title }}</span></a>
    <ul class="dropdown-menu">
        {{ $slot }}
    </ul>
</li>
