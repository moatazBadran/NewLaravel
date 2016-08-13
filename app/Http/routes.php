<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

/*
Route::get('/', function () {
    return view('posts.list');
});
  */         
Route::get('/', 'PostController@allPosts');


Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@deletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);


Route::get('/edit/{id}','PostController@edit');
Route::post('/edit/{id}','PostController@postEditPost');


Route::get('/posts/create','PostController@create');
Route::get('/posts/{id}','PostController@singlePost');
Route::post('/posts/create','PostController@save');
           
    /*       
    Route::post('posts/list', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    });*/

