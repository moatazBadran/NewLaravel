@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        
        <div class="col-sm-8">
           
            <h1>{{ $post->title }}</h1>
			<div class="col-sm-8">
			<div class="col-sm-4">created at : {{$post->created_at->diffForHumans()}}</div>
			<div class="col-sm-4">updated at : {{$post->updated_at->diffForHumans()}}</div>
            </div>    
			<div class="col-sm-8"><h3>{{$post->body}}</h3></div>
			
      </div>      
            
       
    </div>



   
@endsection
