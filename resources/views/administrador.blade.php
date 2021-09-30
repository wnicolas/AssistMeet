@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @include('layouts.sidebar')
            <div class="col-md-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pacientes" data-toggle="tab" href="#ver-pacientes" role="tab"
                            aria-controls="ver-pacientes" aria-selected="true">Ver pacientes</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="false">Ver todos los médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Registrar médico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Registrar paciente</a>
                    </li>
                </ul>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  show active" id="ver-pacientes" role="tabpanel" aria-labelledby="profile-tab">
                        <ver-pacientes-component></ver-pacientes-component>
                    </div>

                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ver-medicos-component></ver-medicos-component>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <registrar-medico-component></registrar-medico-component>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <registrar-paciente-component></registrar-paciente-component>
                    </div>
                </div>




            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
