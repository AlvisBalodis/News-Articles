<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 shadow-lg p-6 rounded-xl">
            <header class="text-center">
                <h2 class="drop-shadow-md text-2xl font-bold uppercase mb-1">Register</h2>
                <p class="drop-shadow-md mb-4">Create an account to comment articles</p>
            </header>
            <form method="POST" action="/register">
                @csrf

                <div class="mb-6">
                    <label for="name"
                           class="drop-shadow-md inline-block text-lg mb-2 pl-3">Name</label>
                    <input
                        class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                        type="text"
                        name="name"
                        id="name"
                        required
                        value="{{old('name')}}"/>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1 ml-3">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="username"
                           class="drop-shadow-md inline-block text-lg mb-2 pl-3">Username</label>
                    <input
                        class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                        type="text"
                        name="username"
                        id="username"
                        required
                        value="{{old('username')}}"/>
                    @error('username')
                    <p class="text-red-500 text-xs mt-1 ml-3">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="email"
                        class="drop-shadow-md inline-block text-lg mb-2 pl-3">Email</label>
                    <input
                        class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                        type="email"
                        name="email"
                        id="email"
                        required
                        value="{{old('email')}}"/>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1 ml-3">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password"
                        class="inline-block text-lg mb-2 pl-3">Password</label>
                    <input
                        class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                        type="password"
                        name="password"
                        id="password"
                        required
                        value="{{old('password')}}"/>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1 ml-3">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        type="submit"
                        class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-1 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Sign Up
                    </button>
                </div>

                <div class="drop-shadow-md mt-6 pb-2">
                    <p>Already have an account?
                        <a href="/login"
                           class="inline-block text-blue-500 font-semibold ml-2 transform hover:scale-110 duration-300"
                        >
                            Log in</a>
                    </p>
                </div>

            </form>
        </main>
    </section>
</x-layout>
