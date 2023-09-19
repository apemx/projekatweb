
@props(['type', 'name', 'label','isRequired' => false,'placeholder'=>''])
<div class="flex--center-full flex-col">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" class="input" name="{{ $name }}" id="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }} {{ $isRequired ? 'required' : '' }} placeholder="{{$placeholder}}">
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>