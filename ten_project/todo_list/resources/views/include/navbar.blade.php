<div class="card shadow">
  <nav class="navbar navbar-expand-md bg-light navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/">Todo List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav  justify-content-center">
            <li class="{{Request::is('/') ? 'active' : ''}}">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="{{Request::is('/todo/create') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('todo.create')}}">Create</a>
            </li>
            <li class="{{Request::is('/update') ? 'active' : ''}}">
              <a class="nav-link" href="#">Update</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>
</div>
