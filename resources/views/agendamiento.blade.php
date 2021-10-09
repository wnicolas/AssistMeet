@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card contenido scroll-vertical">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1>¡Agendamiento de citas!</h1>
                            <p class="lead">Agenda tu cita con nuestros los mejores médicos en la especialidad que
                                quieras
                                en el horario que más te convenga.</p>
                        </div>
                    </div>
                    <programar-cita-paciente-component :user_id={{Auth::user()->id}}></programar-cita-paciente-component>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
