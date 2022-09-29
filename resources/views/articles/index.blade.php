<x-layout>
    @include('articles._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($articles->count())
            <x-articles-grid :articles="$articles"/>
            {{ $articles->links() }}
        @else
            <p class="text-center font-medium text-xl">No Articles Found</p>
        @endif
    </main>
</x-layout>
