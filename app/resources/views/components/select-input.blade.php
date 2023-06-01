@props(['id', 'name', 'options', 'required' => false, 'autocomplete' => null, 'placeholder' => null, 'disabled' => false])

<select {{ $attributes->merge(['class' => 'nice-select' . ($errors->has($name) ? ' is-invalid' : ''), 'id' => $id, 'name' => $name, 'required' => $required, 'autocomplete' => $autocomplete, 'disabled' => $disabled]) }}>
    @if ($placeholder)
        <option value="" disabled {{ old($name) === null ? 'selected' : '' }}>{{ $placeholder }}</option>
    @endif
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ old($name) === (string) $value ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>

@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror