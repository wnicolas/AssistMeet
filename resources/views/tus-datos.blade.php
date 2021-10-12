@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card contenido scroll-vertical">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1>Tus datos de usuario</h1>
                            <p class="lead">Estos son tus datos de usuario, aquì puedes consultar los datos que
                                registrados en AssistMeet tiene registrados acerca de ti.</p>
                        </div>
                    </div>
                    <ver-datos-pacientes-component :user_id={{json_encode(Auth::user()->id)}}></ver-datos-pacientes-component>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
