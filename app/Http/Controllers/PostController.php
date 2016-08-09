<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    
    
    public function allPosts()
    {
        return view('posts.list');    }
    
    public function singlePosts()
    {
        return view('posts.show');    }
    }
    
    

