@props(['type' => 'primary', 'icon' => null, 'size' => null, 'isSubmit' => false])
<button type="{{ $isSubmit ? 'submit' : 'button' }}" {{ $attributes->merge(['class' => 'btn btn-' . $type . ($size ? ' btn-' . $size : '') . ($icon && $slot->isEmpty() ? ' btn-icon' : '') . ($icon && !$slot->isEmpty() ? ' btn-icon icon-left' : '')]) }}>
    @if($icon)<i class="{{ $icon }}"></i>@endif
    @if(!$slot->isEmpty()) {{ $slot }} @endif
</button>