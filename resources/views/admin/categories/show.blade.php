@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between my-3">
                <h2>Category Details {{ $category->name }} <span>({{ $category->slug }})</span></h2>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-secondary text-white align-self-center">
                    <strong>Back To List</strong>
                </a>
            </div>
        </div>
        <div class="col-12">
            <h2>Post linked to categories:</h2>
            <div class="row">
                @forelse($category->posts as $post)
                <div class="col-12 col-md-4">
                    <div class="card">
                        <h4>{{ $post->title }}</h4>
                        <p>{{ $post->excerpt }}</p>
                        <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-sm btn-secondary text-white">
                            Continue Read
                        </a>
                    </div>
                </div>
                @empty
                <h5 class="text-center">There are No Posts in This Category</h5>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection