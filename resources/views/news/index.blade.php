@extends('layouts.master')

@section('title')
News
@endsection
@section('content')

	    <div class="col-sm-8 blog-main">

	    @foreach($news as $n)

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="/news/{{$n->id}}"> {{$n->title}}</a></h2>
            <p>{{$n->content}}</p>
              <h3>User</h3>
            <ul>
              <li>Name: {{$n->user->name}}</li>
              <li>Email: {{$n->user->email}}</li>
            </ul>
          </div><!-- /.blog-post -->

        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
               href="{{$news->previousPageUrl()}}">
                Previous
            </a>
              <a class="btn btn-outline-{{ $news->hasMorePages() == 1 ? 'primary' : 'secondary disabled'}}"
                 href="{{$news->nextPageUrl()}}">
                  Next
              </a>
          </nav>
            <p>
                Page {{$news->currentPage()}} of {{$news->lastPage()}}
            </p>

        </div><!-- /.blog-main -->

@endsection
