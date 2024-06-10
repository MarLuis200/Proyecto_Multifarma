@extends('layouts.dash2')

@section('content')
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="icon" href="/img/logo_farmacia.png" />

    <meta name="theme-color" content="#000000" />


    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])

  </head>

  <body>

      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">


              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1>Inventario</h1>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                          
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li><a href="{{ route('admin/inventario') }}">Inventario</a></li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/inventario') }}">Inventario</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $inventario->nombre }}</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-body">

                  @if(Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                      {{ Session::get('message') }}
                    </div>
                  @endif

                    <p class="h5">Nombre:</p>
                    <p class="h6 mb-3">{{ $inventario->nombre }}</p>

                    <p class="h5">Existencia:</p>
                    <p class="h6 mb-3">{{ $inventario->existencia }}</p>

                    <p class="h5">Fecha Caducidad:</p>
                    <p class="h6 mb-3">{{ $inventario->fecha_caducidad }}</p>

                    <p class="h5">Número de compra:</p>
                    <p class="h6 mb-3">{{ $inventario->no_compra }}</p>

                      <p class="h5">Clave Proveedor:</p>
                      <p class="h6 mb-3">{{ $inventario->clave_proveedor }}</p>

                    <p class="h5">Imagen:</p>
                    <img src="../../../uploads/{{ $inventario->img }}" class="img-fluid" width="20%">

                </div>

                <a href="{{ route('admin/inventario') }}" class="btn btn-warning mt-3">Volver</a>

              </div>

          </div>

        </div>

      </div>

      </div>

        </div>

            </div>

          </div>

          <hr>

    <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por Net Team</a>
      </div>
    </footer>

    <script type="text/javascript">

        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }

    </script>

  </body>
</html>
@endsection