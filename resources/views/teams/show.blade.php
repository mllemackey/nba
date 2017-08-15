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

      </div><!-- /.blog-main -->

@endsection
