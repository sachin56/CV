<!-- Start Navigation -->
<nav id="site-navigation" class="navbar main-navigation nav-light navbar-top">
    <div class="container-fluid container-nav nav-no-shadow">
        <div class="container">

            <!-- Top menu buttons -->
            <div class="menu-buttons">
                <ul>
{{--                    <li><a href="#" class="button button-simple" title="link">Log In</a></li>--}}
{{--                    <li><a href="#" class="button button-full" title="link">Sign Up</a></li>--}}
<!-- Authentication Links -->
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link button button-simple" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link button button-full" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </ul>
            </div>

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL('/')}}">CV Temp</a>
            </div>


        </div> <!-- .container -->
    </div> <!-- .container-fluid -->
</nav>
<!-- End Navigation -->
