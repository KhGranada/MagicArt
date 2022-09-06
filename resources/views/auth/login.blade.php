@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body row p-0">
                <div class="col-sm-6 col-xs-12 p-5">
                    <h5>Inicia sesión</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                            <label for="email" class="col-md-12 col-form-label text-left">Correo de usuario</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                            <label for="password" class="col-md-12 col-xs-12 col-form-label text-left">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Recordar mi usuario en este dispositivo
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       Olvide mi contraseña
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-sm-6 hidden-xs" style="background-image: url('img/login_image.jpg');background-repeat:no-repeat;background-size:cover">
                        <h2 class=" text-center light mt-5" style="color:#fff">Bienvenido a Magic Art</h2>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
