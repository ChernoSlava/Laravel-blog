<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() 
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about', ['tags' => $tags]);
    }

    public function articles()
    {
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);
    }

    public function welcome()
    {
        return view('welcome');
    }
}
