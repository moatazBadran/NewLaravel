<?php

namespace App\Http\Controllers;


  

use App\Http\Requests;
use App\Post;
use Carbon\Carbon;
use Request;
use Auth;

class PostController extends Controller
{
    
    
    public function allPosts() {
        $posts = Post::all();
        return view('posts.list', ['posts' => $posts]);    
    }
    
    public function singlePost($id)
    {	  
		  $post=Post::findOrFail($id);
		  $post = Post::find($id);
		  
		 
		  
	if(!$post){ return 'not found';}		 
       return view('posts.show',compact('post'));    
    }
	
	public function create()
	{
		return view('posts.create');
	}
	
	public function save()
    {	  
		 
		  $input = Request::all();
		  $user_id =  Auth::user()->id;
		 
		  //$input['created_at']=Carbon::now();
		  Post::create([
		  'body'=>$input['body'],
		  'title'=>$input['title'],
		  'url'=>$input['url'],
		  'user_id'=>$user_id
		  ]);
		  //return redirect('posts');
		  return redirect('/');
		  
    }
	
	public function deletePost($post_id)
	{
		
		$post = Post::where('id','=',$post_id)->first();
		
		$post->forceDelete();
		return redirect('/');
	}
	
	public function edit($id)
    {
        $post=Post::findOrFail($id);
		 	 
       return view('posts.edit',compact('post'));    
    
     
    }
	
	public function postEditPost(Request $request,$id)
    {
        $input = Request::all();
       $post=Post::findOrFail($id);
        if (Auth::user()->id != $post->user_id) {
            return redirect()->back();
        }
		$post->title = $input['title'];
		$post->url = $input['url'];
        $post->body = $input['body'];
        $post->update();
		return redirect('/');
        //return response()->json(['new_body' => $post->body], 200);
    }
}