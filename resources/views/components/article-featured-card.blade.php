<article
    @props(['article'])

    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0
    hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="News Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$article->category"/>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/articles/{{ $article->slug }}">
                            {{ $article->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $article->created_at->format('j. M. Y, H:i:s') }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {!! $article->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/newspng.png" width="82" alt="News avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{ $article->author->username }}">{{ $article->author->name }}</a></h5>
                        <h6>News Articles</h6>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/articles/{{ $article->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200
                       hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
