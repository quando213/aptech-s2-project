<div class="form-group {{ $icon ? 'position-relative has-icon-left' : '' }}">
    <select name="{{ $name }}" class="form-control trigger-change" {{ $disabled ? 'disabled' : '' }}>
        @if($placeholder)
            <option value="" selected hidden disabled>{{ $placeholder }}</option>
        @endif
        @if($optionAll)
            <option value="" selected>{{ $optionAll }}</option>
        @endif
        @foreach($options as $key => $value)
            <option value="{{ $sameKeyValue ? $value : $key }}"
                {{ $selected && strval($selected) == strval($sameKeyValue ? $value : $key) ? 'selected' : '' }}
                {{ $isFilter && request()->has($name) && request()->get($name) == strval($sameKeyValue ? $value : $key) ? 'selected' : '' }}
            >{{ $value }}</option>
        @endforeach
    </select>
    @if($icon)
        <div class="form-control-icon">
            <i class="bi {{ $icon }}"></i>
        </div>
    @endif
</div>
