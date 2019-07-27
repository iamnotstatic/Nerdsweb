@extends('layouts.app')


@section('content')

    <div class="card">
            <div class="card-header">
                    Categories
            </div>
            <div class="card-body">  
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Category name
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
                             @foreach($categories as $category)
                                 <tr>
                                    <td>
                                       {{ $category->name }} 
                                    </td>
                                    <td>
                                             <a href="{{ route('category.edit', ['id' => $category->id])}}" class="btn btn-primary">Edit</a>
                                             <span class="glyphicon glyphicon-pencil"></span>
                                    </td> 
                                    <td>
                                            <a href="{{ route('category.delete', ['id' => $category->id])}}" class="btn btn-danger">Delete</a>
                                             <span class="glyphicon glyphicon-remove-circle"></span>
                                    </td>  
                                </tr>
                            @endforeach
                        </tbody>
                
                    </table>
        </div>
    </div>

@endsection