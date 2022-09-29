@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">

    <header class="mb-8">
        <h2 class="text-3xl font-bold uppercase mb-1">Dashboard</h2>
        <p class="text-lg">{{ $heading }}</p>
    </header>

    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/articles"
                       class="{{ request()->is('admin/articles') ? 'text-blue-500' : '' }}">All Posts</a>
                </li>
                <li>
                    <a href="/admin/articles/create"
                       class="{{ request()->is('admin/articles/create') ? 'text-blue-500' : '' }}">New
                        Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>
