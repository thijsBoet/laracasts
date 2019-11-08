<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles.index', ['articles' => Article::latest()->get()]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required|max:255',
            'body' => 'required'
        ]);
    }
}
