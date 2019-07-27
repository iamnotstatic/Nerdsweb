@extends('layouts.app')


@section('content')

    <div class="card">
            <div class="card-header">
                    Posts
            </div>
            <div class="card-body">  
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Image
                            </th>
                            <th scope="col">
                                Title
                            </th>
                            <th scope="col">
                                Edit
                            </th>
                            <th scope="col">
                                Delete
                            </th>
                        </tr>
                    </thead>
                
                        <tbody>
                             @foreach($posts as $post)
                                 <tr>
                                    <td>
                                            <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="50px" height="50px"> 
                                        
                                    </td>

                                    <td>
                                            {{ $post->title }} 
                                    </td>
                                    <td>
                                             
                                    </td> 
                                    <td>
                                            
                                    </td>  
                                </tr>
                            @endforeach
                        </tbody>
                
                    </table>
        </div>
    </div>

@endsection