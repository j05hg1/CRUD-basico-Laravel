<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="J05HG1">
        <meta name="theme-color" content="#000000">

        <title>Crud con Laravel 10 y Bootstrap 5</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}        

        <!-- Styles -->
        <style>
            
        </style>

        {{-- Bootstrap --}}
        @vite(['resources/js/app.js'])

    </head>

    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
              <div class="container">
                {{-- <a class="navbar-brand" href="#"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
      
                <div class="collapse navbar-collapse" id="navbarsExample07">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                  </li> 
                  </ul>
      
                </div>
              </div>
            </nav>
        </header>
        
        <div class="container mt-5 mb-5">

            <div class="row">
  
              <div class="col-md-12">
                <br>
                <h1 style="font-size: 28px;" class=" text-center">CRUD con Laravel 10 y Bootstrap 5</h1>
  
                <div class="header">
            <div class="container">
              <div class="row">
                 <div class="col-md-5">
                    <!-- Logo -->
                    <div class="logo">
                       <h1>Administrador</h1>
                    </div>
                 </div>
                 <div class="col-md-5">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="input-group form">
                             <!--
                             <input type="text" class="form-control" placeholder="Buscar...">
                             <span class="input-group-btn">
                               <button class="btn btn-primary" type="button">Buscar</button>
                             </span>
                             -->
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="col-md-2">
                    <div class="navbar navbar-inverse" role="banner">
                        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                          <ul class="nav navbar-nav">                            
                            <li><a href="{{ route('admin/productos') }}">Administrador</a></li>
                          </ul>
                        </nav>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        
        <div class="page-content">
            <div class="row">
              
              <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
    
                  <ul class="list-group">
                      <li class="list-group-item">
                        <a href="{{ route('admin/productos') }}"> Productos</a>
                      </li>
                      <li class="list-group-item">
                        Opción 1
                      </li>
                      <li class="list-group-item">
                        Opción 2
                      </li>
                      <li class="list-group-item">
                        Opción 3
                      </li>
                      <li class="list-group-item">
                        Opción 4
                      </li>
                      <li class="list-group-item">
                        Opción 5
                      </li>
                      <li class="list-group-item">
                        Opción 6
                      </li>
                      <li class="list-group-item">
                        Opción 7
                      </li>
                      <li class="list-group-item">
                        Opción 8
                      </li>
                      <li class="list-group-item">
                        Opción 9
                      </li>
                      <li class="list-group-item">
                        Opción 10
                      </li>
                  </ul>
                </div>
              </div>

              <div class="col-md-10">

                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin/productos') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                  </ol>
                </nav>
                
                <div class="row">
        
                  <div class="col-md-12">
        
                      <div class="content-box-large">
        
                        <div class="panel-heading">
                        <div class="panel-title"><h2>Productos</h2></div>             
                            
                      </div>

                      <div class="panel-body">

                        {{-- Alerta / mensaje de acción --}}
                        @if(Session::has('message'))
                            <div class="alert alert-primary" role="alert">
                            {{ Session::get('message') }}
                            </div>
                        @endif

                        <a href="{{ route('admin/productos/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar </a>
                        <br/>

                        <section class="example mt-4">
                            <div class="table-responsive">
                        
 
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Stock</th>
                                            <th>Imagen</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>             
                                        @foreach ($productos as $prod) 
                                        <tr>
                                            <td class="v-align-middle">{{$prod->nombre}}</td>
                                            <td class="v-align-middle">{{$prod->precio}}</td>
                                            <td class="v-align-middle">{{$prod->stock}}</td>
                                            <td class="v-align-middle">
                                              <img src="{!! asset("uploads/$prod->img") !!}" width="100" class="img-responsive">
                                            </td>
                                            <td class="v-align-middle">
                                                <form action="{{ route('admin/productos/eliminar',$prod->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <a href="{{ route('admin/productos/detalles',$prod->id) }}" class="btn btn-dark">Detalles</a>
                                                    <a href="{{ route('admin/productos/actualizar',$prod->id) }}" class="btn btn-primary">Editar</a>
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr> 
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
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
            Desarrollado por <a href="#" target="_blank">J05HG1</a>
        </div> 
    </footer>

        <script type="text/javascript"> 
            function confirmarEliminar()
            {
            var x = confirm("¿Estas seguro de Eliminar?");
            if (x)
                return true;
            else
                return false;
            } 
        </script>        
    </body>
</html>