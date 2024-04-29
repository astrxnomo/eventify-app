@extends('layouts.app')

<title>Eventify | Iniciar sesión</title>

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Iniciar sesión') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <label for="email">{{ __('Correo') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-2">
                            <div class="col-md-6">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row justify-content-center mt-4">
                            <div class="col-md-6">
                                <div class="row text-center">
                                    <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-primary text-white">
                                            {{ __('Iniciar sesión') }}
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check pt-2 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-top: 0;">
                                            <label class="form-check-label" for="remember" style="margin-left: 1.5rem;">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link d-block mt-3" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif

                                @if (Route::has('register'))
                                    <div class="mt-3 text-center">
                                        <span>{{ __("¿No tienes cuenta?") }}</span>
                                        <a class="link-primary" href="{{ route('register') }}">
                                            {{ __('Registrarme') }}
                                        </a>
                                    </div>
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
