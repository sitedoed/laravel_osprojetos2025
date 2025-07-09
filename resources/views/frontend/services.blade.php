@extends('layouts.frontend')

@section('title', 'Nossos Serviços')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Nossos Serviços</h1>
    
    <div class="row g-4">
        @foreach(['Web Development', 'Mobile Apps', 'Consultoria'] as $service)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3>{{ $service }}</h3>
                    <p>Descrição detalhada do serviço.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection