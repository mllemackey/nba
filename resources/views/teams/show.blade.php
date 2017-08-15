@extends('layouts.master')

@section('title')
{{$team->name}}
@endsection
@section('content')

      <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <ul>
              <li>Email: {{$team->email}}</li>
              <li>Adress: {{$team->adress}}</li>
              <li>City: {{$team->city}}</li>
            </ul>
            <h2>Players:</h2>
            <ul>
            @foreach($team->player as $p)
            
              <li><a href="/players/{{$p->id}}">{{$p->first_name}} {{$p->last_name}}</a></li>

            @endforeach
            </ul>
          </div><!-- /.blog-post -->
          <hr>
          <div class="comments">
            <h2>Comments</h2>
            <ul>
              @foreach($team->comment as $comment)
            
              <li>{{$comment->user->name}}: {{$comment->content}}</li>

            @endforeach
            </ul>
            <hr>
            <h2>Add New Comment</h2>
            <form method="POST" action="/teams/{{$team->id}}">

              {{ csrf_field() }}

              <div class="form-group">
                  <label for="content">Comment</label>
                  <textarea class="form-control" id="content" name="content"></textarea>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add Comment</button>
              </div>

            </form>


          @if (count($errors->all()) > 0)

              @foreach($errors->all() as $error)
                  <div class="form-group">
                      <div class="alert alert-danger">
                          <li>{{ $error }}</li>
                      </div>
                  </div>
              @endforeach

          @endif
          </div>

      </div><!-- /.blog-main -->

@endsection
