<nav class="navbar navbar-expand-md card shadow-sm mb-1">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            তথ্য আমাদের অধিকার
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon bg-black"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('লগইন') }}</a>
                </li>

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('রেজিস্টার') }}</a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">{{ __('তথ্য জানুন') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('question_answer') }}">{{ __('প্রশ্ন ও উত্তর') }}</a>
                </li>

                @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('লগআউট') }}
                        </a>
                        <a href="{{ url('profile')}}" class="dropdown-item"> {{ __('প্রোফাইল')}}</a>
                        <a href="{{ url('home')}}" class="dropdown-item"> {{ __('ড্যাশবোর্ড')}}</a>

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
