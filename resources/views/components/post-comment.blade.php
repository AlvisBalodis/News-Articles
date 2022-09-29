@props(['comment'])

<article class="flex shadow-lg p-6 rounded-xl space-x-4">

    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" class="rounded-lg shadow-md">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                Posted
                <time>{{{ $comment->created_at->format('j. M. Y, H:i:s') }}}</time>
            </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
