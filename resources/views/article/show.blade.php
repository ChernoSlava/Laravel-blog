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
        <h3 class="commentTitle">Комментарии:</h3>
        <ul class="commentsList">
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

    {{ Form::open(['route' => ['articles.comments.store', 'article' => $article->id], 'class' => 'custom-create mt-4']) }}
        <div class="form-group">
            {{ Form::hidden('user_id', auth()->id()) }}
            {{ Form::hidden('article_id', $article->id) }}
            {{ Form::label('user', 'Add name:') }}
            {{ Form::text('user', null, ['class' => 'form-control', 'rows' => '4']) }}
            {{ Form::label('content', 'Add comment:') }}
            {{ Form::textarea('content', null, ['class' => 'form-control', 'rows' => '4']) }}
        </div>
        {{ Form::submit('Отправить', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection