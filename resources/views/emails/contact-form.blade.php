@extends('layouts.email')

@section('content')
<h1>Novo Contato</h1>

<p><strong>Nome:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
@if($formData['company'])
<p><strong>Empresa:</strong> {{ $formData['company'] }}</p>
@endif
@if($formData['phone'])
<p><strong>Telefone:</strong> {{ $formData['phone'] }}</p>
@endif
@if($formData['service'])
<p><strong>Serviço:</strong> {{ $formData['service'] }}</p>
@endif
<p><strong>Mensagem:</strong></p>
<p>{{ $formData['message'] }}</p>
@endsection