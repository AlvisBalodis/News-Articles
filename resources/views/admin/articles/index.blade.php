<x-layout>
    <x-setting heading="Manage Posts">

        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">

                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="/articles/{{ $article->slug }}" class="block relative">
                                        {{ $article->title }}
                                    </a>
                                </div>

                            </div>
                        </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="/admin/articles/{{ $article->id }}/edit"
                               class="text-blue-500 hover:text-blue-600">Edit</a>
                        </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <form method="POST" action="/admin/articles/{{ $article->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:text-red-600">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-setting>
</x-layout>
