@props(['value'])

<label {{ $attributes->merge(['class' => 'font-medium text-md text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
