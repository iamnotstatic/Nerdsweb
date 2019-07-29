@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Edit Nerdsweb Settings
        </div>
        <div class="card-body">
            <form action="{{ route('settings.update') }}" method="POST">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Site Name</label>
                    <input type="text" name="site_name" value="{{ $setting->site_name}}" class="form-control">
                </div>
                <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $setting->address }}">
                </div>
                <div class="form-group">
                    <label for="name">Contact phone</label>
                    <input type="text" name="contact_number" class="form-control" value="{{ $setting->contact_number }}">
                </div>
                <div class="form-group">
                    <label for="name">Contact Email</label>
                    <input type="text" name="contact_email" class="form-control" value="{{ $setting->contact_email }}">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-lg">Update Site settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection