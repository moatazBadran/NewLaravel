<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    
    
    
    public function show()
    {
        return echo " this is my code ";
    }
    Route::get('user/{id}', 'UserController@showProfile');

}