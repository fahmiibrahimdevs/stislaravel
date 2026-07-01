@props(['title', 'description' => null])
<h2 class="section-title">{{ $title }}</h2>
@if($description)
<p class="section-lead">
    {{ $description }}
</p>
@endif
{{ $slot }}