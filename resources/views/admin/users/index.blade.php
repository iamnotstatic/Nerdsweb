@extends('layouts.app')


@section('content')

    <div class="card">
            <div class="card-header">
                    Users
            </div>
            <div class="card-body">  
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Image
                            </th>
                            <th scope="col">
                                Name
                            </th>
                            <th scope="col">
                                Permissions 
                            </th>
                            <th scope="col">
                                Delete
                            </th>
                        </tr>
                    </thead>
                
                        <tbody>
                             @if(count($users) > 0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($user->profile->avatar) }}" alt="profile img" width="60px" height="60px" style="border-radius: 50%"> 
                                            
                                        </td>

                                        <td>
                                            {{ $user->name }} 
                                        </td>
                                        <td>
                                             Permissions  
                                        </td> 
                                        <td>
                                             Delete  
                                        </td>  
                                    </tr>
                                @endforeach
                             @else

                             <tr>
                                    <th colspan="5" class="text-center">No Users</th>
                            </tr>
                             @endif
                        </tbody>
                
                    </table>
        </div>
    </div>

@endsection