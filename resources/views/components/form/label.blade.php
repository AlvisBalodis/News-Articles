@props(['name'])

<label
    for="{{ $name }}"
    class="inline-block text-lg mb-2 pl-3"
>
    {{ ucwords($name) }}
</label>
