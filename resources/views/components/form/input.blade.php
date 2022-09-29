@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <input
        class="border-none shadow-lg text-sm rounded-lg px-3 py-3 w-full focus:outline-none focus:ring"
        name="{{ $name }}"
        id="{{ $name }}"
    {{ $attributes(['value' => old($name)]) }}
</x-form.field>
