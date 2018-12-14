@extends('layout.layout')

@section('content')
<div class="row pb-4">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Gestão de Clientes</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('clientes.create') }}"> Cadastrar Novo Cliente</a>
    </div>
  </div>
</div>

  <div class="form-group">
    <strong>#:</strong>
    {{ $clientes->id }}
  </div>

  <div class="form-group">
    <strong>Nome:</strong>
    {{ $clientes->nome }}
  </div>

  <div class="form-group">
    <strong>Data de Nascimento:</strong>
    {{ $clientes->data_nascimento }}
  </div>

  <div class="form-group">
    <strong>CEP:</strong>
    {{ $clientes->cep }}
  </div>

  <div class="form-group">
    <strong>Rua:</strong>
    {{ $clientes->rua }}
  </div>

  <div class="form-group">
    <strong>Bairro:</strong>
    {{ $clientes->bairro }}
  </div>

  <div class="form-group">
    <strong>Cidade:</strong>
    {{ $clientes->cidade }}
  </div>

  <div class="form-group">
    <strong>UF:</strong>
    {{ $clientes->uf }}
  </div>

  <div class="form-group">
    <strong>E-mail:</strong>
    {{ $clientes->email }}
  </div>

  <div class="form-group">
    <strong>Telefone:</strong>
    {{ $clientes->telefone }}
  </div>

  <div class="form-group">
    <strong>Celular:</strong>
    {{ $clientes->celular }}
  </div>

  <div class="form-group">
    <strong>Login:</strong>
    {{ $clientes->login }}
  </div>

  <div class="form-group">
    <strong>Senha:</strong>
    {{ $clientes->password }}
  </div>

@endsection
