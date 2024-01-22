@extends('layouts.app')

@section('title', 'Статьи')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('articles.create') }}">Create article</a>
@endsection

@section('header', 'Статьи')

@section('content')
    <div class="container mt-4">
        <div>
            {!! Form::open(['route' => 'articles.index', 'method' => 'get', 'class' => 'customForm']) !!}
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
                    <div>
                        <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                            <h4>Name: {{ $article->name }}</h4>
                        </a>
                        <div>Description: {{Str::limit($article->body, 200)}}</div>
                    </div>
                    <div class="btns-box">
                        <a href="{{ route('articles.edit', ['article' => $article->id]) }}">Edit</a>
                        {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-link', 'onclick' => 'return confirm("Are you sure?")']) !!}
                        {!! Form::close() !!}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="paginate">{{ $articles->links() }}</div>

@endsection
