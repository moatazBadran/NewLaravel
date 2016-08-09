@extends('layouts.app')

@section('content')


    <div class="panel-body">
        <form action="/post" method="POST" class="form-horizontal">
            {{ csrf_field() }}

           
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Post</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
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

                 <!-- Table Headings -->
                    <thead>
                        <th>Post</th>
                        <th>&nbsp;</th>
                    </thead>

                    
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                
                                <td class="table-text">
                                    <div>{{ $post->name }}</div>
                                </td>

                                
                                    
 
    <td class="table-text">
        <div>{{ $post->name }}</div>
    </td>

   
    <td>
        <form action="/task/{{ $task->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button>Delete Post</button>
        </form>
    </td>
<
                                    
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
