<div class="col-3 sidebar">
    <div class="my-5">
        <img class="img-fluid" src="{{ asset('img/LogoAssistMeet.png') }}" alt="Logo de assistMeet">
    </div>
    <div class="opciones my-5">
        <nav class="nav nav-pills flex-column text-center">
            @if (Auth::check() && Auth::user()->role === 'Administrador')
                {{-- =====================Rutas disponibles administrador========================= --}}
                <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('citas.create') }}">Citas</a>
                {{-- =====================Rutas disponibles administrador========================= --}}
            @else
                @if (Auth::check() && Auth::user()->role === 'Paciente')
                    {{-- =====================Rutas disponibles pacientes========================= --}}
                    <a href="{{ route('home') }}">Inicio</a>
                    <a class="nav-link" href="{{ route('agendamiento-citas') }}">Agendamiento de citas</a>
                    <a class="nav-link" href="{{ route('historial-medico') }}">Tu historial médico</a>
                    <a class="nav-link" href="{{ route('tus-datos') }}">Tus datos de usuario</a>
                    {{-- =====================Rutas disponibles pacientes========================= --}}
                @else
                    <li>>Debes iniciar sesión</li>
                @endif

            @endif
        </nav>
    </div>
</div>
