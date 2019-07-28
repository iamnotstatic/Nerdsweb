@extends('layouts.app')


@section('content')

    <div class="card">
            <div class="card-header">
                    Tags
            </div>
            <div class="card-body">  
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Tag name
                            </th>
                            <th scope="col">
                                Editing
                            </th>
                            <th scope="col">
                                Deleting
                            </th>
                        </tr>
                    </thead>
                
                        <tbody>
                             @if(count($tags) > 0)

                                @foreach($tags as $tag)
                                    <tr>
                                        <td>
                                        {{ $tag->tag }} 
                                        </td>
                                        <td>
                                                <a href="{{ route('tag.edit', ['id' => $tag->id])}}" class="btn btn-primary">Edit</a>
                                                <span class="glyphicon glyphicon-pencil"></span>
                                        </td> 
                                        <td>
                                                <a href="{{ route('tag.delete', ['id' => $tag->id])}}" class="btn btn-danger">Delete</a>
                                                <span class="glyphicon glyphicon-remove-circle"></span>
                                        </td>  
                                    </tr>
                                @endforeach

                             @else

                             <tr>
                                    <th colspan="5" class="text-center">No Tags yet.</th>
                            </tr>

                             @endif
                        </tbody>
                
                    </table>
        </div>
    </div>

@endsection