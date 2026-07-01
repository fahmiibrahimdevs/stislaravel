@props(['type' => 'primary'])
<div {{ $attributes->merge(['class' => 'badge badge-' . $type]) }}>
    {{ $slot }}
</div>