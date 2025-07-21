@extends('layouts.frontend')

@section('title', 'Página Inicial')

@section('content')

@include('components.carousel')


@include('components.hero-title')



<div class="container">
    <div class="hero-section bg-primary text-white rounded-3 p-5 mb-5">
        <h1 class="display-4">Bem-vindo à nossa empresa</h1>
        <p class="lead">Soluções em desenvolvimento de software</p>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
@include('components.hero-title')
@include('frontend.contact')
                </div>
            </div>
        </div>
        <!-- Mais serviços... -->
    </div>
</div>

@include('components.footer')
@endsection