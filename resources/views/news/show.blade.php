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
          </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

@endsection
