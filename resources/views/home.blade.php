@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">¡Bienvenido, {{ Auth::user()->name }}!</h1>
                            <p class="lead">Aquí podrás acceder a todos los servicios ofrecidos por AssitMeet como
                                agendamiento de citas, historial médico, datos de usuario y más</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
