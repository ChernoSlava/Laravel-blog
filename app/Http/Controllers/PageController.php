<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PageController extends Controller
{
    public function index() 
    {   

        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about.index', compact('tags'));
    }


    public function welcome()
    {   
        // $client = new Client();
        // $response = $client->get('http://127.0.0.1:8080/api/data');
        // $data = json_decode($response->getBody(), true);
        $data = 'mock';
        // Обработка полученных данных
        return view('welcome', ['data' => $data]);
    }


}
