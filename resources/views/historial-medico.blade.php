@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-9">
                <div class="card contenido scroll-vertical">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1>Historial médico</h1>
                            <p class="lead">Aquí podrás ver los detalles de tu historia clínica como tratamientos
                                tomados, diagnósticos, y más información.</p>
                        </div>
                    </div>
                    <div class="container-fluid my-3">
                        <div class="row">
                            <div class="col-4">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                        role="tab" aria-controls="v-pills-home" aria-selected="true">Datos generales</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false">Antecedentes médicos</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                        aria-selected="false">Estado actual</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                        href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                        aria-selected="false">Procedimientos recientes</a>
                                    <a class="nav-link" id="v-pills-medicamentos-tab" data-toggle="pill"
                                        href="#v-pills-medicamentos" role="tab" aria-controls="v-pills-medicamentos"
                                        aria-selected="false">Medicamentos</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        Nombres: Diego Alejandro <br> Apellidos: Ocampo
                                        Buitrago <br> Fecha de nacimiento: 25/05/1999 <br>Edad: 22 <br> Tipo de documento:
                                        CC <br> Número de documento: 12334507786 <br> Nacionalidad: Colombia <br> Estado
                                        civil: Casado <br>Ocupación: Ingeniero</div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">HÁBITOS <br>Alcohol: Consumo moderado
                                        <br>Tabaco: Niega <br>Drogas: Niega <br>Café: Alto consumo <br>Alimentación:
                                        Alimentación sin restricciones de 3 o 4 veces al día <br>Sueño: Poco, de tres a
                                        cuatro horas diarias <br>Otros: Estilo de vida sedentario debido a su ocupación <br>
                                        ENFERMEDADES PASADAS <br>Asma a los 10 años
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">ESTADO ACTUAL <br>Respiratorio: Sin datos
                                        patológicos aparente <br>Alérgico: Alergia moderada al polen <br>Neurológico: Sin
                                        datos patológicos aparentes <br> Gastrointestinal: Sin datos patológicos aparentes
                                        <br>Hematológicos: Sin datos patológicos aparentes <br> Infectológicos: Sin datos
                                        patológicos aparentes <br>Quirurgicos: Procedimiento quirúrgico de remoción de
                                        apéndice
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">PROCEDIMIENTOS RECIENTES <br>05/08/2020
                                        <br>Radiografía de torax <br>Acargo del doctor: Luis Ocampo <br> No presentó
                                        condiciones adversas
                                        <br>01/01/2020
                                        <br>Electrocardiograma <br>Acargo del doctor: Diego Vélez <br> No presentó
                                        condiciones adversas
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-medicamentos" role="tabpanel"
                                        aria-labelledby="v-pills-medicamentos">Medicamentos <br> Analgésicos: No registra
                                        <br>Antiácidos: No registra <br>Antialérgicos: No registra<br> Antiinflamatorios: No
                                        registra
                                        <br>Antipiréticos: No registra

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
