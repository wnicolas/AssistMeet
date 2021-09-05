@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @include('layouts.sidebar')
            <div class="col-md-9">
                <registrar-medico-component></registrar-medico-component>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
