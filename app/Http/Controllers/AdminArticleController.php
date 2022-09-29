<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Validation\Rule;

class AdminArticleController extends Controller
{
    public function index()
    {
        return view('admin.articles.index', [
            'articles' => Article::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store()
    {
        Article::create(array_merge($this->validateArticle(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));
        return redirect('/')->with('flashMessage', 'Article Created Successfully!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article)
    {
        $attributes = $this->validateArticle($article);
        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $article->update($attributes);

        return back()->with('flashMessage', 'Article Updated Successfully!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('flashMessage', 'Article Deleted Successfully!');
    }

    /**
     * @param Article $article
     * @return array
     */
    protected function validateArticle(?Article $article = null): array
    {
        $article ??= new Article();

        return request()->validate([
            'title' => 'required',
            'thumbnail' => $article->exists ? ['image'] : (['required', 'image']),
            'slug' => ['required', Rule::unique('articles', 'slug')->ignore($article)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
    }
}
