@extends('layouts.loginlay')
@section('title')
LOGIN
@endsection
<!--
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@section('content')
 <!-- test -->
<body class="layout-centered bg-img" style="background-image: url({{asset('img/4.jpg')}}) ;">
<main class="main-content">
 <div class="row justify-content-center">
  <div class="bg-white rounded shadow-7 w-400 mw-100 p-6">
    
     <h5 class="mb-7">Sign into your account</h5>
     <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email">
             @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif
      </div>

      <div class="form-group">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
      </div>

      <div class="form-group flexbox py-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>

        @if (Route::has('password.request'))
             <a class="btn btn-link" href="{{ route('password.request') }}">Forgot password?</a>
        @endif

        
      </div>

      <div class="form-group">
        <button class="btn btn-block btn-primary" type="submit">Login</button>
      </div>
    </form>

    <hr class="w-30">

    <p class="text-center text-muted small-2">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
  </div>
 
 </div>
</main>
</body>
@endsection