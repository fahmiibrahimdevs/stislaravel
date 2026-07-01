@props(['value' => 0, 'max' => 100, 'type' => 'primary', 'height' => null, 'label' => null])
<div class="progress" @if($height) data-height="{{ $height }}" style="height: {{ $height }}px;" @endif>
    <div class="progress-bar bg-{{ $type }}" role="progressbar" data-width="{{ $value }}%" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="{{ $max }}" style="width: {{ $value }}%;">
        @if($label) {{ $label }} @endif
    </div>
</div>