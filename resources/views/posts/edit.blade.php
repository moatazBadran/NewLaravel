@extends('layouts.app')
@section('content')



<section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="{{ url('edit/'.$post->id) }}" method="post" class="form-horizontal">
			 {{ csrf_field() }}
			 <input type="hidden" name="postId" value="{{$post->id}}" >
			<div class="form-group">
                    <input class="form-control" name="title" id="new-post" value="{{$post->title}}" rows="5" placeholder="Post Title">
            </div>
			<div class="form-group">
                    <input class="form-control" name="url" id="new-post" rows="5" value="{{$post->url}}" placeholder="Post URL">
            </div>
            <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post">{{$post->body}}</textarea>
            </div>
                <button type="submit" class="btn btn-primary" data-dismiss="modal" >Edit</button>
            </form>
        </div>
    </section>
@endsection