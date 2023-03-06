@extends('layouts.admin');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 my-4">
            <div class="d-flex justify-content-evenly">
                <div>
                    <h3>Elenco Post</h3>
                </div>
                <div>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-secondary">Add New Post</a>
                </div>
            </div>
        </div>
        <div class="table table-striped">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <th>{{$post->title}}</th>
                        <th>{{$post->slug}}</th>
                        <th>
                            {{--action--}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection