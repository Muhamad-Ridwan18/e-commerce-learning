@push('register_styles')
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
            border: 0 !important;
            backdrop-filter: blur(10px) !important;
        }

        .img-thumbnail {
            border: rgba(255, 255, 255, 0.1) !important;
            border: none !important;
            max-width: 100% !important;
            width: 500px !important;
        }

        .form {
            background: rgba(255, 255, 255, 0.5) ;
            /* backdrop-filter: blur(10px); */
            border: none ;
            border-radius: 6px ;
            padding: 8px 10px ;
            width: 100% ;
        }

        .form:focus {
            border: none !important;
            outline: none !important;
        }
        
    </style>
@endpush

@extends('layouts.app')

@section('content')
    <div class="container  ">
        <div class="mx-auto ">
            <div class="card p-4">
                <div class="fs-4 fw-bold text-center">{{ __('Register') }}</div>

                <div class="card-body ">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 mb-2">
                            <img src="/FE/img/img1.png" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-form-label">{{ __('Name') }}</label>

                                    <div class="col">
                                        <input id="name" type="text"
                                            class="form  @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class=" col-form-label">{{ __('Email Address') }}</label>

                                    <div class="col">
                                        <input id="email" type="email"
                                            class="form @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class=" col-form-label">{{ __('Password') }}</label>

                                    <div class="col">
                                        <input id="password" type="password"
                                            class="form @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <label for="password-confirm"
                                        class=" col-form-label">{{ __('Confirm Password') }}</label>

                                    <div class="col">
                                        <input id="password-confirm" type="password" class="form"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
