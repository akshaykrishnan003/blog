@extends('main')

@section('title')
Create New Post | Laravel Blog
@endsection



@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create New Post</h1>
            <hr>
        <form method="post" action="{{route('posts.store')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Title</label>
                  <input type="text" data-parsley-required="true" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter the title of your post">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Post:</label>
                  <textarea class="form-control" data-parsley-required="true" name="body" placeholder="Write away........" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
              </form>
        </div>
    </div>
    
@endsection




