@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Update Tag
        </div>
        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tag->id ]) }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="{{ $tag->tag }}" name="tag" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Update tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection