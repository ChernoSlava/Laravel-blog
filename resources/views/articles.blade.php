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
