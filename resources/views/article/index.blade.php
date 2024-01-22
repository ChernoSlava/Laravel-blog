@extends('layouts.app')

@section('title', 'Статьи')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('article.create') }}">Create article</a>
@endsection

@section('header', 'Статьи')

@section('content')
    <div class="container mt-4">
        <div>
            {!! Form::open(['route' => 'article.index', 'method' => 'get', 'class' => 'customForm']) !!}
                <div class="customForm_input">
                    {!! Form::label('q', 'Поиск:') !!}
                    {!! Form::text('q', $q, ['class' => 'customForm']) !!}
                </div>
                <div class="customForm_btn">
                    {!! Form::submit('Найти', ['class' => 'customForm']) !!}
                </div>
            {!! Form::close() !!}
        </div>    
        <ul style="max-width: 250px;">
            @foreach ($articles as $article)
                <li>
                    <a href="{{ route('articles.show', ['id' => $article->id]) }}">
                        <h4>Name: {{ $article->name }}</h4>
                    </a>
                    <div>Description: {{Str::limit($article->body, 200)}}</div>
                    <a href="{{ route('article.edit', ['id' => $article->id]) }}">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="paginate">{{ $articles->links() }}</div>

@endsection
