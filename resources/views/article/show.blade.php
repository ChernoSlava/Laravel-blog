@extends('layouts.app')

@section('title', '$Статья')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('article.index') }}">All articles</a>
@endsection

@section('header')
    {{ $article->name }}
@endsection

@section('content')
    <div class="container mt-4">                
        <p>{{Str::limit($article->body, 200)}}</p>
    </div>
@endsection