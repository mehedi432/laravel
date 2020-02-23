<div class="card shadow">
<nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center">

<div class="container">
  <a class="navbar-brand" href="/">Basic Site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav">
      <li class="{{Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('home')}}"><strong>Home</strong><span class="sr-only">(current)</span></a>
      </li>

      <li class="{{Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('contact')}}"><strong>Contact</strong><span class="sr-only">(current)</span></a>
      </li>

      <li class="{{Request::is('about') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('about')}}"><strong>About</strong><span class="sr-only">(current)</span></a>
      </li>

      <li class="{{Request::is('messages') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('messages')}}"><strong>Messages</strong><span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</div>
</nav>
</div>
