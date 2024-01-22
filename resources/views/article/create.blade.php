@extends('layouts.app')

@section('title', '$Создание статьи')

@section('links')
    <a href="/">Main page</a>
    <a href="{{ route('article.index') }}">All articles</a>
@endsection

@section('header', 'Create article')
<!-- 
@section('content')
    <div class="container mt-4">   
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif             
        {{ Form::model($article, ['route' => 'article.store', 'class' => 'custom-create']) }}
            <div>
                {{ Form::label('name', 'Название', ['class' => 'custom-create_label'])}}
                {{ Form::text('name'), ['class' => 'custom-create_input'] }}<br>
            </div>

            <div>
                {{ Form::label('body', 'Содержание', ['class' => 'custom-create_label']) }}
                {{ Form::textarea('body'), ['class' => 'custom-create_input'] }}<br>
            </div>
            {{ Form::submit('Создать') }}
        {{ Form::close() }}
    </div>
@endsection -->


@section('content')
    <div class="container mt-4">   
        {{ Form::model($article, ['route' => 'article.store', 'class' => 'custom-create']) }}
            @include('article.form')
            {{ Form::submit('Создать') }}
        {{ Form::close() }}
    </div>
@endsection