@extends('layouts.app')

@section('content')

<section class="fxt-template-animation fxt-template-layout19">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 fxt-bg-img" data-bg-image="{{URL('login_assests/img/figure/bg19-l.jpg')}}">
                <div class="fxt-header">
{{--                    <a href="login-19.html" class="fxt-logo"><img src="{{URL('login_assests/img/logo-19.png')}}" alt="Logo"></a>--}}
                    <h1>Welcome To CVTemp</h1>
{{--                    <p>Sample Text</p>--}}
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="fxt-btn-ghost" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-12 fxt-bg-color">
                <div class="fxt-content">
                    <div class="fxt-form">
                        <h2>Login into your account</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="fxt-transformY-50 fxt-transition-delay-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-5">
                                    <button type="submit" class="fxt-btn-fill">
                                        {{ __('Login') }}
                                    </button>

{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
                                </div>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <div class="fxt-transformY-50 fxt-transition-delay-3">--}}
{{--                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="fxt-transformY-50 fxt-transition-delay-4">--}}
{{--                                    <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">--}}
{{--                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="fxt-transformY-50 fxt-transition-delay-3">--}}
{{--                                    <div class="fxt-checkbox-area">--}}
{{--                                        <div class="checkbox">--}}
{{--                                            <input id="checkbox1" type="checkbox">--}}
{{--                                            <label for="checkbox1">Keep me logged in</label>--}}
{{--                                        </div>--}}
{{--                                        <a href="forgot-password-19.html" class="switcher-text2">Forgot Password</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="fxt-transformY-50 fxt-transition-delay-5">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button type="submit" class="fxt-btn-fill">Log in</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </form>
                    </div>
{{--                    <div class="fxt-footer">--}}
{{--                        <ul class="fxt-socials">--}}
{{--                            <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6">--}}
{{--                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7">--}}
{{--                                <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="fxt-google fxt-transformY-50 fxt-transition-delay-8">--}}
{{--                                <a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9">--}}
{{--                                <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-9">--}}
{{--                                <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')

@endsection





@endsection
