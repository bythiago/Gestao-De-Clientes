<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- JQuery  -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-dt/css/jquery.dataTables.min.css') }}">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

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
              <a class="nav-link" href="{{ route('clientes.create') }}">Cadastrar Novos Cliente</a>
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

    <!-- <footer class="footer">
     <div class="container">
       <span class="text-muted">Place sticky footer content here.</span>
     </div>
   </footer> -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>
    <!-- Optional JavaScript -->
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <!-- jQuery Masked Input Plugin -->
    <script src="{{ asset('/bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js') }}"></script>
    <!-- ViaCEP  -->
    <script src="{{ asset('js/viacep.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#tables').DataTable({
          "language": {
                "url": "{{ asset('js/Portuguese-Brasil.json') }}"
            }
        });

        $("#cep").mask("99999-999");
        $("#telefone").mask("(99)99999999");
        $("#celular").mask("(99)9?99999999");
      });
    </script>
  </body>
</html>
