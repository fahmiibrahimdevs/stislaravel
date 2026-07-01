@props(['type' => 'text', 'name' => null, 'label' => null, 'value' => null, 'placeholder' => null, 'icon' => null])
<div class="form-group">
    @if($label)
    <label>{{ $label }}</label>
    @endif
    @if($icon)
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="{{ $icon }}"></i>
            </div>
        </div>
        <input type="{{ $type }}" class="form-control" {{ $name ? 'name='.$name : '' }} {{ $value ? 'value='.$value : '' }} {{ $placeholder ? 'placeholder='.$placeholder : '' }} {{ $attributes }}>
    </div>
    @else
    <input type="{{ $type }}" class="form-control" {{ $name ? 'name='.$name : '' }} {{ $value ? 'value='.$value : '' }} {{ $placeholder ? 'placeholder='.$placeholder : '' }} {{ $attributes }}>
    @endif
</div>