<!doctype html>

<title>News Articles</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<body style="font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue,
Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji">

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="News Articles Logo" width="300">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button
                            class="px-6 font-semibold uppercase hover:text-blue-500">
                            Welcome, {{ auth()->user()->name }}!
                        </button>
                    </x-slot>

                    @can('admin')
                        <x-dropdown-item href="/admin/articles"
                                         :active="request()->is('admin/articles')">Dashboard
                        </x-dropdown-item>
                        <x-dropdown-item href="/admin/articles/create"
                                         :active="request()->is('admin/articles/create')">New Post
                        </x-dropdown-item>
                    @endcan

                    <x-dropdown-item href="#" x-data="{}"
                                     @click.prevent="document.querySelector('#logout-form').submit()">Log out
                    </x-dropdown-item>
                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>

            @else
                <a href="/register"
                   class="flex items-center font-semibold hover:text-blue-500 transform hover:scale-110 duration-300">
                    <i class="material-icons pr-1">how_to_reg</i>Register</a>

                <a href="/login"
                   class="flex items-center mx-4 font-semibold hover:text-blue-500 transform hover:scale-110 duration-300">
                    <i class="material-icons pr-1">login</i>Log in</a>
            @endauth
            <a href="#newsletter"
               class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 hover:bg-blue-600">
                Subscribe for Updates
            </a>
        </div>
    </nav>

    {{ $slot }}

    <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/newspng.png" alt="" class="mx-auto -mb-1" style="width: 245px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No spam.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email" type="text" placeholder="Your email address"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>
<x-flash/>
</body>
