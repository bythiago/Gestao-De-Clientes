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

@if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
  </div>
 @endif

<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-hover table-sm" id="tables">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Data</th>
          <th>CEP</th>
          <th>E-mail</th>
          <th>Tel</th>
          <th>Cel</th>
          <!-- <th>Matr</th>
          <th>Login</th>
          <th>Password</th> -->
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clientes as $cliente)
          <tr>
            <td>{{$cliente['id']}}</td>
            <td>{{$cliente['nome']}}</td>
            <td>{{$cliente['data_nascimento']}}</td>
            <td>{{$cliente['cep']}}</td>
            <td>{{$cliente['email']}}</td>
            <td>{{$cliente['telefone']}}</td>
            <td>{{$cliente['celular']}}</td>
            <!-- <td>{{$cliente['matricula']}}</td>
            <td>{{$cliente['login']}}</td>
            <td>{{$cliente['password']}}</td> -->
            <td>
              <form action="{{action('ClienteController@destroy', $cliente['id'])}}" method="POST">
                @csrf
                @method('DELETE')
                <input name="_method" type="hidden" value="DELETE">

                <a class="btn btn-info btn-sm" href="{{ action('ClienteController@show', $cliente['id']) }}"><i class="fa fa-search" title="Mostrar"></i></a>
                <a class="btn btn-warning btn-sm" href="{{ action('ClienteController@edit', $cliente['id']) }}" title="Editar"><i class="fa fa-pen"></i></a>
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Tem certeza de que deseja Excluir esse Registro?')" title="Deletar"><i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
