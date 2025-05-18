
@extends('layouts.main')

@section('title', 'Cadastro de Dados')

@section('content')


    <div class="container-formulario">
    <div class="corpo_formulario">
      <p class="titulo_formulario">CADASTRO DE DADOS</p>
      <form action="{{ route('clientes.store') }}" method="POST">
      @csrf
        <div class="input_cadastro-box">
          <div class="label-input" id="NOME">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
          </div>

        </div>

        <div class="input_cadastro-box">
          <div class="label-input" id="CPF">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" required
              oninput="aplicarMascaraCPF(this)" onkeydown="validarEntrada(event)">
          </div>
          <div class="label-input" id="EMAIL">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
          </div>
        </div>

        <div class="input_cadastro-box">
          <div class="label-input" id="DATA">
            <label for="nasci">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="nasci" required>
          </div>
          <div class="label-input" id="TELEFONE">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" maxlength="15" id="telefone" required onkeyup="handlePhone(event)" oninput="handlePhone(event)" />
          </div>
        </div>


        <div class="input_cadastro-box">
          <div class="label-input" id="DATA">
            <label for="genero">Gênero</label>
            <select name="genero" id="genero" required>
              <option value="" hidden>Qual o seu gênero</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
            </select>
          </div>

          <div class="label-input" id="ENDERECO">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" maxlength="2" required>
          </div>

        </div>
        <div class="input_cadastro-box">

        </div>

        <div class="input_cadastro-box">
          <div class="label-input" id="ENDERECO">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="ENDERECO" required>
          </div>

        </div>

        <div class="btn-formulario">
          <button type="submit" class="botao-submit">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  

  {{-- Limita o calendário de data de nascimento para até a data atual --}}
  <script>

   const dataNascimentoInput = document.getElementById('nasci');
    const hoje = new Date();
    const anoAtual = hoje.getFullYear();
    const mesAtual = String(hoje.getMonth() + 1).padStart(2, '0'); 
    const diaAtual = String(hoje.getDate()).padStart(2, '0');
    const dataMaxima = `${anoAtual}-${mesAtual}-${diaAtual}`;

    dataNascimentoInput.setAttribute('max', dataMaxima);
  </script>

  @endsection
