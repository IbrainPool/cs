<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/11.png">
    <title>Productos</title>

</head>
<header>
    <div class=" jumbotron text-center bg-primary style= bg-primary" style="margin-bottom:-3%"  >
        <h1>ALMACÉN DE PRODUCTOS</h1>
        @yield('encabezado')
      </div>

 </header>
 <main>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('alta')}}">Alta de producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('productos.index')}}">Consulta de Producto</a>
          </li>

        </ul>
      </div>
    </nav>

    @yield('menu')
 </main>




<footer>
    <br>

    <div class="jumbotron jumbotron-fluid style= bg-info" style="margin-bottom:0" >
      <div class="container">
          <div class="row">
                <div class="col-sm-15">
                       <h3 class="display-9 ">Roman Sosa Valladares</h3>
                       <p class="lead">&copy; 2022</p>
                 </div>
          </div>
          @yield('Piepagina')
      </div>
    </div>
</html>
