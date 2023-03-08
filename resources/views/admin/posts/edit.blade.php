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
            <form action="{{ route('admin.posts.update', $post->slug) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                    <label for="control-label">
                        Title
                    </label>
                    <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="{{ old('title') ?? $post->title }}">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="control-label">
                        Content
                    </label>
                    <textarea class="form-control" placeholder="Content" id="content" name="content" value="{{ old('content') ?? $post->content }}"></textarea>
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