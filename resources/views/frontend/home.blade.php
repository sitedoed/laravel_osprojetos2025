@extends('layouts.frontend')

@section('title', 'Página Inicial')

@section('content')
<div class="container">
    <div class="hero-section bg-primary text-white rounded-3 p-5 mb-5">
        <h1 class="display-4">Bem-vindo à nossa empresa</h1>
        <p class="lead">Soluções em desenvolvimento de software</p>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Serviço 1</h3>
                    <p>Descrição do serviço oferecido.</p>
                </div>
            </div>
        </div>
        <!-- Mais serviços... -->
    </div>
</div>
@endsection