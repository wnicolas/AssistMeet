@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card contenido scroll-vertical">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">¡Agendamiento de citas!</h1>
                            <p class="lead">Agenda tu cita con nuestros los mejores médicos en la especialidad que quieras
                                en el horario que más te convenga.</p>
                        </div>
                    </div>
                    <h3 class="text-center texto-azul">Seleccione la especialidad de su cita</h3>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Revisión general</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Dermatología</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Ginecología</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Urologíal</div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Oftalmología</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Pediatría</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Geriatría</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="#" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Neumología</div>
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
