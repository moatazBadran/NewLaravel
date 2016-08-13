@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    
  <form action="/posts/list" method="POST" class="form-horizontal">       
            {{ csrf_field() }}

       <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                <h1>You can add new post from here !</h1>
            </div>
         </div>
      
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-5">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Post
                </button>
            </div>
         </div>
  </form>
</div>



@if (count($posts) > 0)
<div class="panel panel-default">
    <div class="panel-heading">

        Current Post

    </div>

    <div class="panel-body">
        <table class="table table-striped post-table">


        <thead>
             <th>Post Title</th>
             <th>&nbsp;</th>
           
        </thead>


        <tbody>
            @foreach ($posts as $post)
                
                <tr>

                    <td class="table-text">
                    <div> <a href="posts /{{$post->id}}">{{ $post->title }}</a> </div>
                        
                    </td>
                    <td>
                    <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Edit Post
                    </button>
                    </td>
                    <td>
                    <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Delete Post
                    </button>
                    </td>
                    
                    
                    
                </tr>
             @endforeach
        </tbody>
        </table>
    </div>
</div>
@endif
@endsection
