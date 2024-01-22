@extends('layouts.app')

@section('title', 'Статьи')

@section('links')
    <a href="/">Main page</a>
@endsection

@section('header', 'Статьи')

@section('content')
    <div class="container mt-4">        
        <ul>
            @foreach ($articles as $article)
            <a href="{{ route('articles.show', ['id' => $article->id]) }}">
                <li>
                    <h4>Name: {{ $article->name }}</h4>
                    <div>Description: {{Str::limit($article->body, 200)}}</div>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
    <div class="paginate">{{ $articles->links() }}</div>

@endsection
