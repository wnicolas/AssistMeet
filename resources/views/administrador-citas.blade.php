@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-9">

                <programar-citas-component></programar-citas-component>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
