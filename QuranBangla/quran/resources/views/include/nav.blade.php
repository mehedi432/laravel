<nav class="navbar navbar-expand-md mb-3 bg-dark shadow-lg fixed-top" style="border-radius: 0; height: 34pt">
    <div class="container">
        <a onmouseover="setUnderline()" class="navbar-brand font-weight-bolder text-white" id="brand_link" href="{{ url('/') }}">
            আল-কোরআন
        </a>
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto font-weight-bold" style="font-size: 13px" >
                <!-- Authentication Links -->
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('sura.index') }}" >{{ __('তথ্য জানুন') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('sura.index') }}" >{{ __('যোগাযোগ করুন') }} </a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}" >{{ __('লগইন') }} </a>
                </li>

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('রেজিস্টার') }}</a>
                </li>
                @endif

                @else

                <li class="nav-item">
                    <a href="{{ url('home')}}" class="nav-link"> {{ __('ড্যাশবোর্ড')}}</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('লগ আউট') }}
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

<script>
</script>
