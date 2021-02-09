<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CV Temp</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL('login_assests/css/bootstrap.min.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CV Temp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL('login_assests/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{URL('login_assests/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{URL('login_assests/font/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL('login_assests/style.css')}}">

    <link href="http://demo.harbourthemes.com/demo/dot/assets/css/colors/color-1.css" rel="stylesheet">

    <style>

        .test{
            -webkit-tap-highlight-color: transparent;
            --lns-unit: 0.5rem;
            --lns-fontSize-small: calc(1.5 * var(--lns-unit, 8px));
            --lns-lineHeight-small: 1.5;
            --lns-fontSize-medium: calc(1.75 * var(--lns-unit, 8px));
            --lns-lineHeight-medium: 1.58;
            --lns-fontSize-large: calc(2.25 * var(--lns-unit, 8px));
            --lns-lineHeight-large: 1.56;
            --lns-fontSize-xlarge: calc(2.8 * var(--lns-unit, 8px));
            --lns-lineHeight-xlarge: 1.43;
            --lns-fontSize-xxlarge: calc(4 * var(--lns-unit, 8px));
            --lns-lineHeight-xxlarge: 1.2;
            --lns-fontWeight-normal: 400;
            --lns-fontWeight-semiBold: 600;
            --lns-radius-medium: 4px;
            --lns-radius-large: 8px;
            --lns-shadow-small: 0 1px 4px hsla(0,0%,0%,0.15);
            --lns-shadow-medium: 0 1px 4px hsla(0,0%,0%,0.1), 0 4px 16px hsla(0,0%,0%,0.07);
            --lns-shadow-large: 0 1px 4px hsla(0,0%,0%,0.07), 0 6px 24px hsla(0,0%,0%,0.1);
            --lns-space-xsmall: calc(0.5 * var(--lns-unit, 8px));
            --lns-space-small: calc(1 * var(--lns-unit, 8px));
            --lns-space-medium: calc(2 * var(--lns-unit, 8px));
            --lns-space-large: calc(3 * var(--lns-unit, 8px));
            --lns-space-xlarge: calc(5 * var(--lns-unit, 8px));
            --lns-space-xxlarge: calc(8 * var(--lns-unit, 8px));
            --lns-color-purple: hsla(230,84%,63%,1);
            --lns-color-salmon: hsla(359,98%,68%,1);
            --lns-color-green: hsla(149,78%,53%,1);
            --lns-color-blue: hsla(201,100%,55%,1);
            --lns-color-red: hsla(356,86%,55%,1);
            --lns-color-yellow: hsla(40,100%,66%,1);
            --lns-color-grey8: hsla(230,11%,19%,1);
            --lns-color-grey7: hsla(230,10%,30%,1);
            --lns-color-grey6: hsla(230,9%,45%,1);
            --lns-color-grey5: hsla(230,8%,60%,1);
            --lns-color-grey4: hsla(230,7%,75%,1);
            --lns-color-grey3: hsla(230,7%,84%,1);
            --lns-color-grey2: hsla(230,7%,92%,1);
            --lns-color-grey1: hsla(230,7%,97%,1);
            --lns-color-white: hsla(230,7%,100%,1);
            --lns-themeLight-color-body: hsla(230,11%,19%,1);
            --lns-themeLight-color-bodyDimmed: hsla(230,40%,19%,0.6);
            --lns-themeLight-color-background: hsla(230,7%,100%,1);
            --lns-themeLight-color-backgroundHover: hsla(230,8%,92%,1);
            --lns-themeLight-color-backgroundActive: hsla(230,7%,84%,1);
            --lns-themeLight-color-overlay: hsla(230,7%,100%,1);
            --lns-themeLight-color-primary: hsla(230,84%,63%,1);
            --lns-themeLight-color-primaryHover: hsla(230,84%,53%,1);
            --lns-themeLight-color-primaryActive: hsla(230,84%,43%,1);
            --lns-themeLight-color-focusRing: hsla(230,84%,63%,0.5);
            --lns-themeLight-color-record: hsla(359,98%,68%,1);
            --lns-themeLight-color-recordHover: hsla(359,98%,58%,1);
            --lns-themeLight-color-recordActive: hsla(359,98%,48%,1);
            --lns-themeLight-color-border: hsla(230,9%,45%,0.2);
            --lns-themeLight-color-disabledContent: hsla(230,8%,60%,1);
            --lns-themeLight-color-disabledBackground: hsla(230,7%,92%,1);
            --lns-themeLight-color-backdrop: hsla(230,11%,19%,0.5);
            --lns-themeLight-color-formFieldBorder: hsla(230,7%,84%,1);
            --lns-themeLight-color-formFieldBackground: hsla(230,7%,100%,1);
            --lns-themeDark-color-body: hsla(230,7%,97%,1);
            --lns-themeDark-color-bodyDimmed: hsla(230,40%,97%,0.6);
            --lns-themeDark-color-background: hsla(230,11%,19%,1);
            --lns-themeDark-color-backgroundHover: hsla(230,11%,26%,1);
            --lns-themeDark-color-backgroundActive: hsla(230,11%,14%,1);
            --lns-themeDark-color-overlay: hsla(230,10%,30%,1);
            --lns-themeDark-color-primary: hsla(230,84%,63%,1);
            --lns-themeDark-color-primaryHover: hsla(230,84%,53%,1);
            --lns-themeDark-color-primaryActive: hsla(230,84%,43%,1);
            --lns-themeDark-color-focusRing: hsla(230,84%,63%,0.5);
            --lns-themeDark-color-record: hsla(359,98%,68%,1);
            --lns-themeDark-color-recordHover: hsla(359,98%,58%,1);
            --lns-themeDark-color-recordActive: hsla(359,98%,48%,1);
            --lns-themeDark-color-border: hsla(230,7%,75%,0.2);
            --lns-themeDark-color-disabledContent: hsla(230,8%,60%,1);
            --lns-themeDark-color-disabledBackground: hsla(230,10%,30%,1);
            --lns-themeDark-color-backdrop: hsla(230,11%,19%,0.5);
            --lns-themeDark-color-formFieldBorder: hsla(230,9%,45%,1);
            --lns-themeDark-color-formFieldBackground: hsla(230,11%,19%,1);
            --lns-color-body: var(--lns-themeLight-color-body);
            --lns-color-bodyDimmed: var(--lns-themeLight-color-bodyDimmed);
            --lns-color-background: var(--lns-themeLight-color-background);
            --lns-color-backgroundHover: var(--lns-themeLight-color-backgroundHover);
            --lns-color-backgroundActive: var(--lns-themeLight-color-backgroundActive);
            --lns-color-overlay: var(--lns-themeLight-color-overlay);
            --lns-color-primary: var(--lns-themeLight-color-primary);
            --lns-color-primaryHover: var(--lns-themeLight-color-primaryHover);
            --lns-color-primaryActive: var(--lns-themeLight-color-primaryActive);
            --lns-color-focusRing: var(--lns-themeLight-color-focusRing);
            --lns-color-record: var(--lns-themeLight-color-record);
            --lns-color-recordHover: var(--lns-themeLight-color-recordHover);
            --lns-color-recordActive: var(--lns-themeLight-color-recordActive);
            --lns-color-border: var(--lns-themeLight-color-border);
            --lns-color-disabledContent: var(--lns-themeLight-color-disabledContent);
            --lns-color-disabledBackground: var(--lns-themeLight-color-disabledBackground);
            --lns-color-backdrop: var(--lns-themeLight-color-backdrop);
            --lns-color-formFieldBorder: var(--lns-themeLight-color-formFieldBorder);
            --lns-color-formFieldBackground: var(--lns-themeLight-color-formFieldBackground);
            font-family: "Lato",Helvetica,Arial,sans-serif !important;
            font-size: 1rem;
            line-height: 1.5rem;
            color: #445383;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            text-transform: uppercase;
            font-weight: 700;
            box-sizing: border-box;
            border: 0;
            margin: 0;
            padding: 0;
            outline: 0;
            vertical-align: baseline;
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            width: 1170px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container test">
                <a class="navbar-brand " style="font-size: 0.8rem;color: #445383;" href="{{ url('/') }}">
                    CV Temp
                </a>


{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>


    <script src="{{URL('login_assests/js/jquery-3.5.0.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{URL('login_assests/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{URL('login_assests/js/bootstrap.min.js')}}"></script>
    <!-- Imagesloaded js -->
    <script src="{{URL('login_assests/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Validator js -->
    <script src="{{URL('login_assests/js/validator.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{URL('login_assests/js/main.js')}}"></script>

</body>
</html>
