@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 my-3">
                <img class="img-fluid" src="{{ asset('img/LogoAssistMeet.png') }}" alt="Logo de assistMeet">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card tarjeta-login">

                    <div class="card-body">
                        <div class="texto-blanco texto-fuerte text-center my-3">Registro</div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="name" type="text" placeholder="Nombre"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="Correo electrónico"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Contraseña"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password-confirm" placeholder="Confirmar contraseña" type="password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrarme
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
