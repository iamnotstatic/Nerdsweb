@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Edit Profile
        </div>
        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Username </label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" value="{{ $user->email}}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="name">New Password</label>
                    <input type="password" name="password" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="name">Upload new Avatar</label>
                    <input type="file" name="avatar" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="name">Twitter</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="name">Github</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea name="about"  cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection