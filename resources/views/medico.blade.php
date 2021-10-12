<div class="container">
    <div class="row justify-content-center">
        @include('layouts.sidebar')
        <div class="col-md-9">
            <div class="card contenido scroll-vertical">
                <div class="jumbotron jumbotron-fluid bg-gris">
                    <div class="container">
                        <h1> ¡Bienvenido, {{ Auth::user()->name }}!</h1>
                        <p class="lead">Accede a la información de tus citas e historias médicas de tus pacientes</p>
                    </div>
                </div>
                <div class="container esquinas-redondeadas mb-2">
                    <div class="row">
                        <div class="col">
                            <h3>Tus próximas citas</h3>
                            <div class="container bg-gris py-3">
                                <ver-citas-medicos-component :user_id={{json_encode(Auth::user()->id)}}></ver-citas-medicos-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
