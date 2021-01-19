<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $articles   = Article::with('category')->paginate(30);
        $categories = Category::all();
        return view('articles.index', compact('articles', 'categories'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }


}
