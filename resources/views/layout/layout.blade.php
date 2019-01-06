<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Gestão de Clientes') }}</title>
    <!-- JQuery  -->
    <script src="{{ asset('public/bower_components/jquery/dist/jquery.min.js?2018') }}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css?2018') }}">
    
    <!-- dataTables -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/datatables.net-dt/css/jquery.dataTables.min.css?2018') }}">

    <!-- Main CSS -->
    <link href="{{ asset('public/css/main.css?2018') }}" rel="stylesheet" type="text/css" /> 

    <!-- font-awesome -->
    <link href="{{ asset('public/bower_components/components-font-awesome/css/fontawesome-all.min.css?2018') }}" rel="stylesheet" type="text/css" />
    
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
      <div class="container">
        <a class="navbar-brand" href="{{ route('clientes.index') }}">Gestão de Clientes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('clientes.index') }}">Página principal <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="{{ route('clientes.create') }}">Cadastrar Novos Clientes</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <main role="main" class="py-4 container">
      <div class="container">
        @yield('content')
      </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="{{ asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js?2018') }}" defer></script>
    <!-- Optional JavaScript -->
    <script src="{{ asset('public/bower_components/datatables.net/js/jquery.dataTables.min.js?2018') }}"></script>
    <!-- jQuery Masked Input Plugin -->
    <script src="{{ asset('public//bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js?2018') }}"></script>
    <!-- ViaCEP  -->
    <script src="{{ asset('public/js/viacep.js?2018') }}" defer></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#tables').DataTable({
          "language": {
                "url": "{{ asset('public/js/Portuguese-Brasil.json') }}"
            }
        });

        $("#cep").mask("99999-999");
        $("#telefone").mask("(99)99999999");
        $("#celular").mask("(99)9?99999999");
      });
    </script>
  </body>
</html>
