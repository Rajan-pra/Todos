@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>
        
                                            <div class="">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email Address"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>
        
                                            <div class="">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password"
                                                    required autocomplete="current-password">
        
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <div class="col-md-6 ">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
        
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row mb-0">
                                            <div class="col-md-8">
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <img src="{{ asset('assets/images/img1.jpeg') }}">
                                        </div>
                                    </div>
                                </div>

                                
                                
                            </form>
                        </div>

                        
                    </div>
                </div>
                

        </div>
    </div>
@endsection
