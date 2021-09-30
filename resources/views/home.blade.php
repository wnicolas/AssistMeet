@extends('layouts.app')

@section('content')


    @if (Auth::check() && Auth::user()->role === 'Administrador')
        {{-- =====================Rutas disponibles administrador========================= --}}
        @include('administrador')
        {{-- =====================Rutas disponibles administrador========================= --}}
    @else
        @if (Auth::check() && Auth::user()->role === 'Paciente')
            
           @include('paciente')
        @else
            <li>>Debes iniciar sesión</li>
        @endif

    @endif

    @include('layouts.footer')
@endsection
