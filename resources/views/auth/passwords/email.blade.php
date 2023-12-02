@push('password_reset_styles')
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
                <div class="fs-4 fw-bold text-center mb-4">{{ __('Reset Password') }}</div>
                <div class="row justify-content-center">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
    
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
    
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
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
