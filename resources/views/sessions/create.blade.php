<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 shadow-lg p-6 rounded-xl">
            <header class="text-center">
                <h2 class="drop-shadow-md text-2xl font-bold uppercase mb-1">Log in</h2>
                <p class="drop-shadow-md mb-4">Log into your account to comment posts</p>
            </header>
            <form method="POST" action="/login">
                @csrf

                <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.error name="email"/>
                <x-form.input name="password" type="password" autocomplete="new-password"/>
                <x-form.error name="password"/>
                <x-form.button>Log in</x-form.button>
                <div class="drop-shadow-md mt-6 pb-2">
                    <p>Don't have an account?
                        <a href="/register"
                           class="drop-shadow-md inline-block text-blue-500 font-semibold ml-2 transform hover:scale-110 duration-300">Register</a>
                    </p>
                </div>
            </form>
        </main>
    </section>
</x-layout>
