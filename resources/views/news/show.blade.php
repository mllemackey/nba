@extends('layouts.master')

@section('title')
{{$news->title}}
@endsection
@section('content')

      <div class="col-sm-8 blog-main">
          <div class="blog-post">
              <p>{{$news->content}}</p>
              <h3>User</h3>
              <ul>
                  <li>Name: {{$news->user->name}}</li>
                  <li>Email: {{$news->user->email}}</li>
              </ul>
              <h3>Teams</h3>
              <ul>
                  @foreach($news->teams as $team)
                      <li>Name: {{$team->name}}</li>
                      <li>Email: {{$team->email}}</li>
                      <hr>
                  @endforeach
              </ul>
          </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

@endsection
