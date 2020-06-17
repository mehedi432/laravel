<nav class="navbar fixed-top navbar-expand-md shadow" style="background-color: #fff">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="text-danger" style="font-weight: bolder; letter-spacing: 5pt; font-family: 'Dejavu serif Book'">δ<span class="text-dark">Laboratory</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" >
            <i class="material-icons text-dark">menu</i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav justify-content-center">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('blog.index') }}" style="letter-spacing: 1.6px; font-family: 'Raleway', sans-serif;">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder" type="button" class="text-dark btn btn-block dropdown-toggle" data-toggle="dropdown">
                                Categories
                            </button>
                            <div class="dropdown-menu">
                                <a class="nav-link text-dark" href="{{ route('categories.android') }}" style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder">{{ __('Android') }} </a>
                                <a class="nav-link text-dark" href="{{ route('categories.android') }}" style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder">{{ __('Linux') }} </a>
                                <a class="nav-link text-dark" href="{{ route('categories.android') }}" style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder">{{ __('Laravel') }} </a>
                                <a class="nav-link text-dark" href="{{ route('categories.android') }}" style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder">{{ __('Python') }} </a>
                            </div>
                          </div> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('business.hire-us') }}" style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder">{{ __('Hire Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('login') }}" style="letter-spacing: 1.6px; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link text-dark" href="{{ route('login') }}" style="letter-spacing: 1.6px;' font-size: 8pt; font-family: 'font-family: 'Raleway', sans-serif'; font-weight: bolder"><i class="material-icons">search</i></a> --}}
                    </li>
                    
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                                {{ __('My Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>