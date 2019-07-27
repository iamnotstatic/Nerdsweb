@extends('layouts.app')



@section('content')

    @if(count($errors) > 0)

        <ul class="list-group mb-3">
 
            @foreach($errors->all() as $error)

            <li class="list-group-item list-group-item-danger ">
                {{ $error }}
            </li>

            @endforeach

        </ul>

    @endif

    <div class="card">
        <div class="card-header">
            Create a new Category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Store category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection