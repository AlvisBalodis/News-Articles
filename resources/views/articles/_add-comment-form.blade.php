@auth
    <form method="POST" action="/articles/{{ $article->slug }}/comments"
          class="bg-gray-100 shadow-lg p-6 rounded-xl">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}"
                 alt=""
                 width="40"
                 class="rounded-full shadow-md mr-4">

            <h2 class="mr-2 font-bold">Hi, {{ auth()->user()->username }}!</h2>
            <h2 class="mr-2">You can leave a comment.</h2>
        </header>
        <x-form.field>
            <textarea name="body"
                      class="shadow-md w-full text-sm px-4 py-4 focus:outline-none focus:ring rounded-xl"
                      rows="5"
                      placeholder="You have something to say?"
                      required></textarea>
            <x-form.error name="body"/>
        </x-form.field>

        <x-form.button>Submit</x-form.button>
    </form>
@else
    <p class="flex justify-center shadow-lg bg-gray-100 mb-10 py-10 rounded-xl">
        <a class="text-2xl font-semibold">Want to leave a comment?</a><a
            href="/register"
            class="text-2xl font-semibold mx-3 text-blue-500 hover:text-blue-600 transform hover:scale-110 duration-300">Register</a><a
            class="text-2xl font-semibold">or</a>
        <a href="/login"
           class="text-2xl mx-3 font-semibold text-blue-500 hover:text-blue-600 transform hover:scale-110 duration-300">Log
            in</a>
    </p>
@endauth
