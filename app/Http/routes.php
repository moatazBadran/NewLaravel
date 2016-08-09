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
Route::get('/home', 'PostController@allPosts');
Route::get('/posts/{id}','PostController@allPosts');
Route::get('/author/{id}','AuthorController@singlePost');
           
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
        
        
     Route::get('/', function () {
     //$posts = App\Post::orderBy('created_at', 'asc')->get();
     $posts = App\Post::all();
     return view('posts.list', ['posts' => $posts]);
     });
