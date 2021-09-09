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
                    <h3 class="text-center texto-azul">Seleccione la especialidad de su cita</h3>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/medicina-general.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Revisión general</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/dermatologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Dermatología</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/ginecologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Ginecología</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/urologia.jpg') }}" class="img-fluid" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Urología</div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/oftalmologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Oftalmología</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/pediatria.jpg') }}" class="img-fluid" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Pediatría</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/geriatria.jpg') }}" class="img-fluid" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Geriatría</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/neumologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Neumología</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="alert alert-primary">Escoja la especialidad que requiere para su cita medica. Si no esta
                            seguro de cual escoger le recomendamos que seleccioneRevisión General. Tenga en cuenta que no
                            todas
                            las especializaciones se encuentran disponibles en todas nuestras sedes</div>
                    </div>

                    <h3 class="text-center texto-azul">Seleccione una de nuestras sedes</h3>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/medicina-general.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Bosa</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/dermatologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Fontibon</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/ginecologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Suba</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/urologia.jpg') }}" class="img-fluid" alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Kennedy</div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/oftalmologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Usaquén</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/pediatria.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Chapinero</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/geriatria.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">Teusaquillo</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="tarjeta-especialidad">
                                    <img src="{{ asset('img/neumologia.jpg') }}" class="img-fluid"
                                        alt="Especialidad">
                                    <div class="titulo-tarjeta-especialidad">San Cristobal</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container p-5">
                        <div class="row">
                            <div class="col">
                                <h4 class="texto-azul">Selecciona la fecha de tu cita</h4>
                            </div>
                            <div class="col">
                                <input type="date" class="form-control">
                            </div>
                            <div class="container  bg-gris esquinas-redondeadas p-3 my-3">
                                <div class="row">
                                    <div class="col">
                                        <table class="table table-striped tabla-azul esquinas-redondeadas">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Hora</th>
                                                    <th scope="col">Médico</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">6:00 am</th>
                                                    <td>Luis Ocampo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7:30 am</th>
                                                    <td>Luis Ocampo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2:15 pm</th>
                                                    <td>Nicolás Buitrago</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3:00 pm</th>
                                                    <td>Alendro Forigua</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col">Escoja uno de los espaciosdisponibles para su cita. Tengaen
                                        cuenta que solo se muestranlos espacios disponibles en lasede escogida y con un
                                        doctorcon la especialización indicadaanteriormente</div>
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
