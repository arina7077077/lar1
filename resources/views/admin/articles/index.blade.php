@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Articles</h1>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-success mt-2">Create</a>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Resource</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->category_id }}</td>
                        <td>{{ $article->resource_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
