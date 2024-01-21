@extends('layouts.app')

@section('title', 'О блоге')

@section('links')
    <a href="/">Main page</a>
@endsection

@section('header', 'О блоге')

@section('content')
    <p>Эксперименты с Laravel на Хекслете</p>
    <div style="display: flex;gap:15px;">
        @foreach ($tags as $tag)
            <p>{{ $tag }}</p>
        @endforeach
    </div>
@endsection