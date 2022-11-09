@extends('layouts')

@section('encabezado')




@endsection

@section('menu')

<div class="container">
<table class="table">


    <thead>
      <tr>

        <th scope="col">Nombre del producto </th>
        <th scope="col">Detalle</th>
        <th scope="col">Precio Unitario</th>
        <th scope="col">Cantidad</th>


      </tr>
    </thead>
    <tbody >
      <tr >
        <td>{{$producto->Nombre_del_Producto}}</td>
        <td>{{$producto->Detalle}}</td>
        <td>{{$producto->Precio_Unitario}}</td>
        <td>{{$producto->Cantidad}}</td>
      </tr>
    </tbody>
  </table>
  <input type="submit"  class="btn btn-success" onclick="history.back()" name="Cancelar" value="Regresar">

</div>
<br> <br> <br><br><br><br><br>

@endsection

@section('piepagina')

@endsection
