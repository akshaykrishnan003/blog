@extends('main')

@section('title')
    Contact | Laravel Blog
@endsection

@section('content')
    

        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email:</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Subject:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter your subject">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Message:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Send Message</button>
                  </form> 
            </div>
        </div>
@endsection