@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card contenido scroll-vertical">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">¡Bienvenido, {{ Auth::user()->name }}!</h1>
                            <p class="lead">Aquí podrás acceder a todos los servicios ofrecidos por AssitMeet como
                                agendamiento de citas, historial médico, datos de usuario y más</p>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h3>Tus próximas citas</h3>
                                <div class="bg-gris esquinas-redondeadas">
                                    <div class="container  esquinas-redondeadas">
                                        <h4>Revisión general</h4>
                                        <p>Lunes 6 de diciembre de 2021 <br>Sede: Chapinero <br>Doctor(a): Nicol Alejandra
                                            Forigua</p>
                                    </div>
                                </div>
                                <div class="bg-gris esquinas-redondeadas">
                                    <div class="container  esquinas-redondeadas">
                                        <h4>Revisión general</h4>
                                        <p>Lunes 6 de diciembre de 2021 <br>Sede: Chapinero <br>Doctor(a): Nicol Alejandra
                                            Forigua</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h3>Recomendado para ti</h3>
                                <div class="bg-gris esquinas-redondeadas">
                                    <div class="container  esquinas-redondeadas">
                                        <h4>Revisión general</h4>
                                        <p>Hábitos saludables <br>Vacunación COVID-19 <br>Nuestras sedes
                                            Forigua</p>
                                    </div>
                                </div>
                                <div class="bg-gris esquinas-redondeadas">
                                    <div class="container  esquinas-redondeadas">
                                        <h4>Sobre nosotros</h4>
                                        <p>Nuestras políticas <br>VTérminos de privacidad <br>Misión y visión <br> Trabaja
                                            con nosotros <br> Nuestras sedes
                                            Forigua</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
