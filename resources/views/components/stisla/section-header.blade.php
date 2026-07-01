@props(['title'])
<div class="section-header">
    <h1>{{ $title }}</h1>
    {{ $slot }}
</div>