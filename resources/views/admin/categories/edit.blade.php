@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
           Update Category
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', ['id' => $category->id ]) }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Update category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection