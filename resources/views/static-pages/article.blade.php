@extends('layouts.app')

@section('title')
    @parent Name
@endsection

@section('content')
    <h1>{{ $article->name }}</h1>
    <br><br>
    <div>{{ $article->content }}</div>
    <br>
    <br>
    <div>{{ $category->name }}</div>
    <br><br>
    <div>{{ $resource->name }}</div>

    <br>
    <a href="{{ route('static-pages.articles') }}">К списку статей</a>
@endsection
