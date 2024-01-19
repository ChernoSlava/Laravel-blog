<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel | Articles</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <a href="/">back</a>
        <div class="container mt-4">
            <h1>Статьи</h1>
        </div>
    </body>
</html> -->

@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <div class="container mt-4">
        <p>Страница со статьями</х>
        
        <div>
        ___________________________________________________________________________
            @foreach ($articles as $article)
                <p>{{ $article->name }}</p>
                <p>{{ $article->body }}</p>
                ---------
            @endforeach
        </div>
    </div>
@endsection