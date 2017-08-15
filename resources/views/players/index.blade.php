@extends('layouts.master')

@section('title')
Players
@endsection

@section('content')

	    <div class="col-sm-8 blog-main">

	    @foreach($players as $player)

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="players/{{$player->id}}"> {{$player->first_name}} {{$player->last_name}}</a></h2>

            <ul>
              <li>First Name: {{$player->first_name}}</li>
              <li>Last Name: {{$player->last_name}}</li>
              <li>Email: {{$player->email}}</li>
              <li>Team: {{$player->team_id}}</li>
            </ul>
          </div><!-- /.blog-post -->

        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

@endsection
