@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <textarea
        class="border-none shadow-lg text-sm rounded-lg px-3 py-6 w-full focus:outline-none focus:ring"
        name="{{ $name }}"
        id="{{ $name }}"
        required
    >{{ $slot ?? old($name) }}
    </textarea>

    <x-form.error name="{{ $name }}"/>
</x-form.field>
