@extends('layouts.app')

@section('title')
    @parent Name
@endsection

@section('content')
    <h1>{{ $article->title }}</h1>
    <div>{{ $article->content }}</div>
    <br>
    <a href="{{ route('static-pages.articles') }}">К списку статей</a>
@endsection
