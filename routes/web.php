<?php


Route::get('/test', function(){
    return App\Post::find(6)->tags;
});

// Web Routes

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', [

        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    // Post routes 

    Route::get('/post/create', [
       'uses' =>  'PostsController@create',
       'as' => 'post.create'
    ]);


    Route::post('/post/store', [

        'uses' => 'PostsController@store',
        'as' => 'post.store'

    ]);

    Route::get('post/delete/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);
    

    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);

    Route::get('/posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'
    ]);

    Route::get('/posts/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'post.restore'
    ]);


    Route::get('/posts/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'post.kill'
    ]);

    Route::get('/posts/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);

    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);




    //Categories Routes 

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);

    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);


    // Tags Routes 

    Route::get('/tags', [
        'uses' => 'TagsController@index',
        'as' => 'tags'

    ]);

    Route::get('/tag/edit/{id}', [
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'

    ]);

    Route::get('/tag/create', [
        'uses' => 'TagsController@create',
        'as' => 'tag.create'

    ]);


    Route::post('/tag/store', [
        'uses' => 'TagsController@store',
        'as' => 'tag.store'

    ]);

    Route::post('/tag/update/{id}', [
        'uses' => 'TagsController@update',
        'as' => 'tag.update'

    ]);


    Route::get('/tag/delete/{id}', [
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'

    ]);

});

