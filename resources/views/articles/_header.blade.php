<header class="max-w-xl font-bold mx-auto mt-20 text-center">
    <h1 class="text-6xl">
        Latest <span class="text-blue-500">AB</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex bg-gray-100 rounded-lg">
            <x-category-dropdown/>
        </div>

        <div class="relative lg:inline-flex bg-gray-100 rounded-lg">
            <form method="GET" action="/">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input
                    class="inline-flex w-full bg-transparent placeholder-black font-semibold text-sm focus:outline-none focus:ring rounded-md px-3 py-2"
                    type="text"
                    name="search"
                    placeholder="Find something"
                    value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
