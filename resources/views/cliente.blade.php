@extends('layouts.main')

@section('title', 'Detalhes do Cliente')

@section('content')
<div class="container-formulario-clientes">
    <div class="corpo_formulario-clientes">
        <p class="titulo_formulario">DETALHES DO CLIENTE</p>
    <ul class="detalhes_cliente">
        <li><strong>Nome:</strong> {{ $cliente->nome }}</li>
        <li><strong>CPF:</strong> {{ $cliente->cpf }}</li>
        <li><strong>Email:</strong> {{ $cliente->email }}</li>
        <li><strong>Data de Nascimento:</strong> {{ $cliente->data_nascimento }}</li>
        <li><strong>Telefone:</strong> {{ $cliente->telefone }}</li>
        <li><strong>Gênero:</strong> {{ $cliente->genero }}</li>
        <li><strong>Estado:</strong> {{ $cliente->estado }}</li>
        <li><strong>Endereço:</strong> {{ $cliente->endereco }}</li>
    
    </ul>
    </div>
    
</div>
@endsection