@extends('layouts.app')



@section('content')
    <div class="card">
        <div class="card-header">
            Create a new Post
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                        <label for="featured">Featured Img</label>
                        <input type="file" name="featured" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" name="content" class="form-control" cols="5" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Store Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection