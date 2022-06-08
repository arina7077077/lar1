@extends('admin.main')

@section('content')
    <div class="col-12">
        <h1>Edit article</h1>
        @foreach($errors->all() as $message)
            <span class="text-danger">{{ $message }}</span>
        @endforeach
        <form action="{{ route('admin.articles.update', $article) }}" method="post">
            @method('put')
            @csrf
            <div class="col-6">
                <label for="name" class="form-label"></label>
                <input id="name" name="name" value="{{ $article->name }}" type="text" class="form-control" placeholder="Enter title">
            </div>
            <div class="col-6">
                <label for="content" class="form-label"></label>
                <textarea id="content" name="content" rows="6" class="form-control" placeholder="Enter content">{{ $article->content }}</textarea>
            </div>
            <div class="col-6">
                <label>
                    <select class="form-select" name="category_id">
                        @foreach($categories as $category)
                            <option @selected($category->id === $article->category_id) value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="col-6">
                <label>
                    <select class="form-select" name="resource_id">
                        @foreach($resources as $resource)
                            <option @selected($resource->id === $article->resource_id) value="{{ $resource->id }}">{{ $resource->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </form>
    </div>
@endsection
