@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Create a new User
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="">
                    </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Add User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection