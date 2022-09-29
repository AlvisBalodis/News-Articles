<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleCommentsController extends Controller
{
    public function store(Article $article)
    {
        request()->validate([
            'body' => ['required']
        ]);
        $article->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);
        return back()->with('flashMessage', 'Comment Added Successfully!');
    }
}
