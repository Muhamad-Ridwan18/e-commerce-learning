@push('login_styles')
    <style>
        body {
            background: linear-gradient(to right, #9cddee, #e4ffdd);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Nunito', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.5) !important;
            border-radius: 20px !important;
            border: none !important;
        }

        .form {
            background: rgba(255, 255, 255, 0.5) !important;
            border-radius: 10px;
            width: 100%;
            border: none;
            padding: 8px 10px;
        }

        .form:focus {
            border: none !important;
            outline: none !important;
        }
    </style>
@endpush

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mx-auto">
            <div class="card p-4">
                <div class="fs-4 fw-bold text-center">{{ __('Login') }}</div>
                <div class="card-body">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 mb-2">
                            <img src="/FE/img/img1.png" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
    
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-form-label">{{ __('Email Address') }}</label>
    
                                    <div class="col">
                                        <input id="email" type="email" class="form @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-form-label">{{ __('Password') }}</label>
    
                                    <div class="col">
                                        <input id="password" type="password"
                                            class="form @error('password') is-invalid @enderror" name="password" required
                                            autocomplete="current-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-4">
                                    <div class="col-offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input form-check-input-lg" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row mb-0 text-center">
                                    <div class="col-offset-md-4 ">
                                        <button type="submit" class="btn btn-primary w-100 mb-3">
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
    </div>
    </div>
@endsection
