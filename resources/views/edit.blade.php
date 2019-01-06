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

      @include('form', ['name' => 'Atualizar'])
    </form>
  </div>
</div>
@endsection
