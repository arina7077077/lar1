@extends('admin.main')

@section('content')
    <div class="col-12">
        <h1>Add article</h1>
        <form action="{{ route('admin.articles.store') }}" method="post">
            @csrf
            <div class="col-6">
                <label for="title" class="form-label"></label>
                <input id="title" name="title" type="text" class="form-control" placeholder="Enter title">
            </div>
            <div class="col-6">
                <label for="content" class="form-label"></label>
                <textarea id="content" name="content" rows="6" class="form-control" placeholder="Enter content"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </form>
    </div>
@endsection
