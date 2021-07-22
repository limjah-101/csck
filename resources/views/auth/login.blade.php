@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
                <h3 class="mb-5 text-success font-weight-bold">{{ __('app.authentication.Login') }}</h3>
            <div class="card border-0 shadow">               
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-md-6 col-form-label">{{ __('app.authentication.E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-6 col-form-label">{{ __('app.authentication.Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('app.authentication.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-5 mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block btn-lg mb-3 shadow">
                                    {{ __('app.authentication.Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('app.authentication.Forgot Your Password?') }}
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
@endsection
