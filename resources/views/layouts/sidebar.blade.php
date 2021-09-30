<div class="col-3 sidebar">
    <div class="my-5">
        <img class="img-fluid" src="{{ asset('img/LogoAssistMeet.png') }}" alt="Logo de assistMeet">
    </div>
    <div class="opciones my-5">
        <ul>
            @if (Auth::check() && Auth::user()->role === 'Administrador')
                {{-- =====================Rutas disponibles administrador========================= --}}
                <li><a href="{{ route('home') }}">Inicio</a></li>
                {{-- =====================Rutas disponibles administrador========================= --}}
            @else
                @if (Auth::check() && Auth::user()->role === 'Paciente')
                    {{-- =====================Rutas disponibles pacientes========================= --}}
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('agendamiento-citas') }}">Agendamiento de citas</a></li>
                    <li><a href="{{ route('historial-medico') }}">Tu historial médico</a></li>
                    <li><a href="{{ route('tus-datos') }}">Tus datos de usuario</a></li>
                    {{-- =====================Rutas disponibles pacientes========================= --}}
                @else
                    <li>>Debes iniciar sesión</li>
                @endif

            @endif

        </ul>
    </div>
</div>
