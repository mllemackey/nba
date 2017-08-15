@extends('layouts.master')

@section('title')
Teams
@endsection
@section('content')

	    <div class="col-sm-8 blog-main">

	    @foreach($teams as $team)

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="teams/{{$team->id}}"> {{$team->name}}</a></h2>

            <ul>
              <li>Email: {{$team->email}}</li>
              <li>Adress: {{$team->adress}}</li>
              <li>City: {{$team->city}}</li>
            </ul>
          </div><!-- /.blog-post -->

        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

@endsection
