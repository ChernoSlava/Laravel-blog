<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about.index', compact('tags'));
    }


    public function welcome()
    {
        return view('welcome');
    }
}
