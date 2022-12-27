@extends('layouts.nav-landing')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}" />
<div class="container">
    <div class="row">
      <div class="col">
        <h3>Register</h3>
        <hr>
        <h1>Register</h1>
        <p>Already A Member? <a href="{{ route('login') }}">{{ __('Login') }}</a></p>
        <div class="mb-3">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
             @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
          <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" placeholder="Phone Number" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>
            @error('phonenumber')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="mb-3">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
        </div>
        <button type="button" class="btn btn-primary">Register</button>
      </div>
      <div class="col">
        <p><img align="right" src="{{URL::asset('/image/auth-pic.png')}}" alt="picnette"></p>
      </div>
    </div>
  </div>
@endsection
