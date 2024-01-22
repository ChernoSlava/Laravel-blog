@extends('layouts.app')

@section('title', '$Создание статьи')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('articles.index') }}">All articles</a>
@endsection

@section('header', 'Create article')

@section('content')
    <div class="container mt-4">   
        {{ Form::model($article, ['route' => 'articles.store', 'class' => 'custom-create']) }}
            @include('article.form')
            {{ Form::submit('Создать') }}
        {{ Form::close() }}
    </div>
@endsection