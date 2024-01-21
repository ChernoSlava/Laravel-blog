@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <div class="container mt-4">        
        <ul>
            @foreach ($articles as $article)
            <li>
                <h4>Name: {{ $article->name }}</h4>
                <div>Description: {{Str::limit($article->body, 200)}}</div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
