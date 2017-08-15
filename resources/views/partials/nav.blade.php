    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          @if (Auth::check())
            <a class="nav-link ml-auto" href="#"> {{Auth()->user()->name}}</a>
            <a class="nav-link" href="/logout">Log Out</a>
          @else
            <a class="nav-link ml-auto" href="/login">Log In</a>
          @endif
        </nav>
      </div>
    </div>