@extends('layouts.master')

@section('contenido')
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">DSS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex">
                        <a class="nav-link active text-white" aria-current="page" href="#">Inicio</a>
                    </div>
                    <div>
                        <form action="{{ route('logout') }}" method="POST" id="frm-logout" class="d-none">
                            @csrf
                        </form>
                        <button type="submit" class="btn btn-sm btn-success" form="frm-logout">
                            Cerrar sesión
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="row mt-4 justify-content-center">
            <img src="{{ asset('assets/img/fcb.png') }}" alt="Fútbol Club Barcelona" class="fcb">
        </div>
        <div class="row mt-2">
            @if (Auth::check())
                <h1>Bienvenido {{ Auth::user()->name }}</h1>
            @endif
        </div>
    </section>
@endsection
