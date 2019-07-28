@extends('layouts.app')



@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Create a new Tag
        </div>
        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="tag" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Store tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection