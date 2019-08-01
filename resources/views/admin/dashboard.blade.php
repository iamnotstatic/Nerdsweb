@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-white text-center bg-info">
                    POSTED
                </div>

                <div class="card-body text">
                    <h2 class="text-center">{{ $posts_count }}</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
                <div class="card card-danger">
                    <div class="card-header text-center text-white bg-danger">
                        TRASHED POST
                    </div>
    
                    <div class="card-body text">
                        <h2 class="text-center">{{ $trashed_count }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                    <div class="card card-danger">
                        <div class="card-header text-center text-white bg-success">
                            USERS
                        </div>
        
                        <div class="card-body text">
                            <h2 class="text-center">{{ $users_count }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                        <div class="card card-danger">
                            <div class="card-header text-center text-white bg-info">
                                CATEGORIES
                            </div>
            
                            <div class="card-body text">
                                <h2 class="text-center">{{ $categories_count }}</h2>
                            </div>
                        </div>
                    </div>
    </div>
@endsection
