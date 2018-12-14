@extends('layout.layout')

@section('content')
<h1>Gestão de Clientes</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

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
