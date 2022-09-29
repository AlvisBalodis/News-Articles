<x-layout>
    <x-setting :heading="'Edit Post: ' . $article->title ">
        <form method="POST" action="/admin/articles/{{ $article->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title', $article->title)"/>
            <x-form.input name="slug" :value="old('slug', $article->slug)"/>
            <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $article->thumbnail)"/>
            <div class="flex-1">
                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="News Post Illustration"
                     class="rounded-xl mt-6 w-auto">
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt', $article->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $article->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.field>
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
