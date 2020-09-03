
@extends('main')

@section('title')
    Home | Laravel Blog
@endsection

@section('content')
    

          <div class="jumbotron">
            <h1 class="display-4">Welcome to the Laravel Blog</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. In perferendis necessitatibus cum distinctio fugit voluptate alias architecto ratione aut possimus, tempora eaque voluptatum odio nihil totam est consequuntur nisi aspernatur!</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </p>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="post" style="padding-bottom: 10px; padding-top:10px;">
              <h3>Post Title</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error doloremque, maxime laudantium, suscipit nobis iure temporibus, repellendus excepturi quod provident delectus aperiam hic quibusdam sequi. Unde ea consequuntur voluptatibus?
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post" style="padding-bottom: 10px; padding-top:10px;">
              <h3>Post Title</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error doloremque, maxime laudantium, suscipit nobis iure temporibus, repellendus excepturi quod provident delectus aperiam hic quibusdam sequi. Unde ea consequuntur voluptatibus?
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post" style="padding-bottom: 10px; padding-top:10px;">
              <h3>Post Title</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error doloremque, maxime laudantium, suscipit nobis iure temporibus, repellendus excepturi quod provident delectus aperiam hic quibusdam sequi. Unde ea consequuntur voluptatibus?
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post" style="padding-bottom: 10px; padding-top:10px;">
              <h3>Post Title</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui error doloremque, maxime laudantium, suscipit nobis iure temporibus, repellendus excepturi quod provident delectus aperiam hic quibusdam sequi. Unde ea consequuntur voluptatibus?
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
          </div>
          </div>
          <div class="col-md-3 offset-md-1" >
          <h2>
            Sidebar
          </h2>
        </div>
      </div>
      
@endsection