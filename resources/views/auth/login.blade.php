@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 my-2">
            <img class="img-fluid" src="{{asset('img/LogoAssistMeet.png')}}" alt="Logo de assistMeet">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card tarjeta-login">
                <div class="card-body mx-5">
                    <div class="texto-blanco texto-fuerte text-center my-3">Ingreso</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row ">
                        
                            <div class="col-12">
                                <input id="email" type="email" placeholder="Usuario" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-12">
                                <input id="password" type="password" placeholder="Contraseña"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
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
