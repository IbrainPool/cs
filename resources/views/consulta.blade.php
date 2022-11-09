@extends('layouts')

@section('encabezado')
@endsection

@section('menu')

<div class="container">
    @forelse ($productos as $producto)
        <table class="table">
     <thead>
            <tr>

            <th scope="col">Nombre del producto </th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Cantidad</th>

            </tr>
     </thead>
     <tbody >
        <tr >
         <td><a href="{{route('productos.show',$producto->id)}}">{{$producto->Nombre_del_Producto}}/Ver Detalle</a></td>
            <td>{{$producto->Precio_Unitario}} </td>
            <td>{{$producto->Cantidad}}</td>
        </tr>
     </tbody>
      </table>
      <br><br><br><br>

        @empty
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">NO HAY PRODUCTOS REGISTRADOS <img src="{{ asset('img/8.png') }}"  style="width: 55px; height: 55px;"  alt=""></h1>
            </div>
          </div>
   @endforelse

</div>
<br> <br> <br><br>
@endsection


@section('piepagina')
@endsection
