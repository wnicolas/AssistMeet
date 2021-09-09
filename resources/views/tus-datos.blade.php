@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card contenido scroll-vertical">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Tus datos de usuario</h1>
                            <p class="lead">Estos son tus datos de usuario, aquì puedes consultar los datos que
                                registrados en AssistMeet tiene registrados acerca de ti.</p>
                        </div>
                    </div>
                    <div class="container-fluid mb-3">
                        <div class="row">
                            <div class="col card">
                                <h3>Datos personales</h3>
                                <label for="">Nombres</label>
                                <input class="form-control" placeholder="Nombres" type="text">
                                <label for="">Apellidos</label>
                                <input class="form-control" placeholder="Apellidos" type="text">
                                <label for="">Fecha de nacimiento</label>
                                <input class="form-control" placeholder="Fecha de nacimiento" type="text">
                                <label for="">Género</label>
                                <input class="form-control" placeholder="Género" type="text">
                            </div>
                            <div class="col card">
                                <h3>Datos de afiliación</h3>
                                <label for="">Tipo de afiliación</label>
                                <input class="form-control" placeholder="Tipo de afiliación" type="text">
                                <label for="">Número de beneficiarios</label>
                                <input class="form-control" placeholder="Número de beneficiarios" type="text">
                                <label for="">Fecha de afiliación</label>
                                <input class="form-control" placeholder="Fecha de afiliación" type="text">
                            </div>
                            <div class="col card">
                                <h3>Datos de contacto</h3>
                                <label for="">Teléfono</label>
                                <input class="form-control" placeholder="Teléfono" type="text">
                                <label for="">Correo</label>
                                <input class="form-control" placeholder="Correo" type="text">
                                <label for="">Dirección</label>
                                <input class="form-control" placeholder="Dirección" type="text">
                                <label for="">Contacto de emergencia</label>
                                <input class="form-control" placeholder="Contacto de emergencia" type="text">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
