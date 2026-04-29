<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        // alle artikels
        $articles = Article::all();

        // limiteer tot 10
//        $articles = Article::take(10)->get();
//
//        // limiteer tot 10
//        $articles = Article::take(10)->orderBy('published_at', 'desc')->get();


        return view('articles.index', ['articles' => $articles]);
    }

    public function show($article){

        $article = Article::where('id', $article)->firstOrFail();

        return view('articles.show', ['article' => $article]);
    }
}
