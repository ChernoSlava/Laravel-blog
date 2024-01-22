@extends('layouts.app')

@section('title', '$Редактирование статьи')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('article.index') }}">All articles</a>
@endsection

@section('header', 'Edit article')

@section('content')
    <div class="container mt-4">   
        {{ Form::model($article, ['route' => ['article.update', $article], 'method' => 'PATCH', 'class' => 'custom-create']) }}
            @include('article.form')
            {{ Form::submit('Обновить') }}
        {{ Form::close() }}
    </div>
@endsection
