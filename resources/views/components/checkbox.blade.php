@props([
    'name',
    'hasError' => $errors->has($name) ? ' text-red-600' : '',
])

<x-filament::label>
    <span class="inline-flex items-center space-x-2">
        <input type="checkbox" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-checkbox'.$hasError]) }}{{ old($name) ? ' checked' : '' }}>
        <span class="ml-2">{{ $slot }}</span>
    </span>
</x-filament::label>