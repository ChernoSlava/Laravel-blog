@extends('layouts.app')

@section('title', '$Статья')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('articles.index') }}">All articles</a>
@endsection

@section('header')
    {{ $article->name }}
@endsection

@section('content')
    <div class="container mt-4">                
        <p>{{Str::limit($article->body, 200)}}</p>
    </div>

    @if ($comments->count() > 0)
        <h3>Комментарии:</h3>
        <ul>
            @foreach ($comments as $comment)
                <li>
                    {{ $comment->user }}
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Нет комментариев</p>
    @endif

@endsection