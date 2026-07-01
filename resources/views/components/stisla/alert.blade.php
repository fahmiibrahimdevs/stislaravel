@props(['type' => 'primary', 'title' => null, 'icon' => null, 'dismissible' => false])
<div {{ $attributes->merge(['class' => 'alert alert-' . $type . ($icon ? ' alert-has-icon' : '') . ($dismissible ? ' alert-dismissible show fade' : '')]) }}>
    @if($icon)
    <div class="alert-icon"><i class="{{ $icon }}"></i></div>
    @endif
    <div class="alert-body">
        @if($dismissible)
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        @endif
        @if($title)
        <div class="alert-title">{{ $title }}</div>
        @endif
        {{ $slot }}
    </div>
</div>