@props(['title' => null, 'headerAction' => null])
<div {{ $attributes->merge(['class' => 'card']) }}>
    @if($title || isset($header) || $headerAction)
    <div class="card-header">
        @if($title)<h4>{{ $title }}</h4>@endif
        {{ $header ?? '' }}
        @if($headerAction)
        <div class="card-header-action">
            {{ $headerAction }}
        </div>
        @endif
    </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
    @if(isset($footer))
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endif
</div>