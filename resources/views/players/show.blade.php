@extends('layouts.master')

@section('title')
{{$player->first_name}} {{$player->last_name}}
@endsection

@section('content')

      <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <ul>
              <li>First Name: {{$player->first_name}}</li>
              <li>Last Name: {{$player->last_name}}</li>
              <li>Email: {{$player->email}}</li>
              <li>Team: <a href="/teams/{{$player->team->id}}">{{$player->team->name}}</a></li>
            </ul>
          </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

@endsection
