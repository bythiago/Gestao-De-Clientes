@extends('layout.layout')

@section('content')

<div class="row pb-4">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Página Principal</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('clientes.create') }}"> Cadastrar Novo Cliente</a>
    </div>
  </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
  <div class="col-md-12">
    <form method="post" action="{{action('ClienteController@update', $clientes->id)}}">
       {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">

       <div class="form-group">
         <label for="nome">Nome:</label>
         <input type="text" name="nome" class="form-control" value="{{ old('nome', $clientes->nome) }}">
       </div>

       <div class="form-group">
         <label for="data_nascimento">Data de Nascimento:</label>
         <input type="date" name="data_nascimento" class="form-control" value="{{ old('data_nascimento', $clientes->data_nascimento) }}">
       </div>

       <div class="form-group">
         <label for="cep">CEP:</label>
         <input type="text" name="cep" class="form-control" value="{{ old('cep', $clientes->cep) }}">
       </div>

       <div class="form-group">
         <label for="email">E-mail:</label>
         <input type="email" name="email" class="form-control" value="{{ old('email', $clientes->email) }}">
       </div>

       <div class="form-group">
         <label for="telefone">Telefone:</label>
         <input type="text" name="telefone" class="form-control" value="{{ old('telefone', $clientes->telefone) }}">
       </div>

       <div class="form-group">
         <label for="celular">Celular:</label>
         <input type="text" name="celular" class="form-control" value="{{ old('celular', $clientes->celular) }}">
       </div>

       <div class="form-group">
         <label for="matricula">Matrícula:</label>
         <input type="text" name="matricula" class="form-control" value="{{ old('matricula', $clientes->matricula) }}">
       </div>

       <div class="form-group">
         <label for="login">Login:</label>
         <input type="text" name="login" class="form-control" value="{{ old('login', $clientes->login) }}">
       </div>

       <div class="form-group">
         <label for="password">Senha:</label>
         <input type="password" name="password" class="form-control" value="{{ old('password', $clientes->password) }}">
       </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
</div>
@endsection
