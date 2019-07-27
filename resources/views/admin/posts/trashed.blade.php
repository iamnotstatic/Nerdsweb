@extends('layouts.app')


@section('content')

    <div class="card">
            <div class="card-header">
                    Trashed Posts
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
                                Restore
                            </th>
                            <th scope="col">
                                Destroy
                            </th>
                        </tr>
                    </thead>
                
                        <tbody>
                             @if(count($posts) > 0)
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                                <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="80px" height="50px"> 
                                            
                                        </td>

                                        <td>
                                                {{ $post->title }} 
                                        </td>
                                        <td>
                                            <a href="hello" class="btn btn-primary">Edit</a>   
                                        </td> 
                                        <td>
                                            <a href="{{ route('post.restore', ['id' => $post->id ])}}" class="btn btn-success">Restore</a>  
                                        </td>
                                        <td>
                                            <a href="{{ route('post.kill', ['id' => $post->id ])}}" class="btn btn-danger">Delete</a>  
                                    </td>  
                                    </tr>
                                @endforeach
                             @else

                             <tr>
                                 <th colspan="5" class="text-center">No trashed Posts</th>
                             </tr>

                             @endif
                        </tbody>
                
                    </table>
        </div>
    </div>

@endsection