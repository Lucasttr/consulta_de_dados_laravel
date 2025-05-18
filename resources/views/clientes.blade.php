@extends('layouts.main')

@section('title', 'Consulta de Clientes')

@section('content')
    <div class="container-formulario-clientes">
        <div class="corpo_formulario-clientes">
            <p class="titulo_formulario">CONSULTA DE CLIENTES</p>
            <form method="GET" action="{{ route('clientes.index') }}" class="mb-4">
                <div class="input_cadastro-box">
                    <div class="label-input" id="busca">
                        <label>Buscar por nome</label>
                        <input class="mandar" type="text" name="busca" value="{{ request('busca') }}"
                            placeholder="Digite o nome">
                    </div>
                </div>
                <div class="input_cadastro-box">
                    <div class="label-input">
                        <label>Nome</label>
                        <select class="mandar" name="nome" id="nome">
                            <option id="nome" value="">Todos</option>
                            @foreach($nomes as $nome)
                                <option value="{{ $nome }}" {{ request('nome') == $nome ? 'selected' : '' }}>{{ $nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input_cadastro-box">
                    <div class="label-input" id="estado">
                        <label>Estado</label>
                        <select class="mandar" id="estado" name="estado">
                            <option value="">Todos </option>
                            @foreach($estados as $estado)
                                <option value="{{ $estado }}" {{ request('estado') == $estado ? 'selected' : '' }}>{{ $estado }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input_cadastro-box">
                    <div class="label-input" id="genero">
                        <label>Gênero </label>
                        <select class="mandar" name="genero">
                            <option value="">Todos</option>
                            @foreach($generos as $genero)
                                <option value="{{ $genero }}" {{ request('genero') == $genero ? 'selected' : '' }}>{{ $genero }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="btn-formulario-clientes">
                    <button class="botao-submit-clientes" type="submit">Filtrar</button>
                </div>
            </form>

            <h2>Clientes</h2>
            <table class="tabela" border="1" cellpadding="5">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Gênero</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                </tr>
                @foreach($clientes as $cliente)
                    <tr>
                        <td><a href="{{ route('clientes.show', $cliente->id) }}">{{ $cliente->nome }}</a></td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->data_nascimento }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->genero }}</td>
                        <td>{{ $cliente->estado }}</td>
                        <td>{{ $cliente->endereco }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection