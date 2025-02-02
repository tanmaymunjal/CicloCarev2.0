@extends('layouts.patientheader')


@section('content')
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">CicloCare</span>
          </a>
        </div>
        <div class="card mb-3">
          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
              <p class="text-center small">Enter your username &amp; password to login</p>
            </div>
            <form class="row g-3 needs-validation" novalidate="" method="POST" action="{{ route('login') }}">
            @csrf
              <div class="col-12">
                <label for="yourUsername" class="form-label">{{ __('Email Address') }}</label>
                <div class="input-group has-validation">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <label for="yourPassword" class="form-label">{{ __('Password') }}</label>
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">{{ __('Remember Me') }}</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
              </div>
              <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="{{route('/')}}">Create an account</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


