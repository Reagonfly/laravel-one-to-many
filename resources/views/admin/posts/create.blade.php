@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row d-flex">
        <div class="col-12">
            <h2>Add New Post</h2>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="control-label">
                        Title
                    </label>
                    <input type="text" class="form-control" placeholder="Title" id="title" name="title">
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