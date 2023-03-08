@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row d-flex">
        <div class="col-12">
            <h2>Add New Post</h2>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-12">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="control-label">
                        Title
                    </label>
                    <input type="text" class="form-control" placeholder="Title" id="title" name="title">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label class="control-label">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="control-label">
                        Content
                    </label>
                    <textarea class="form-control" placeholder="Content" id="content" name="content"></textarea>
                </div>
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-sm btn-secondary">
                        Save Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection