@extends('Template.Template')
@section('plantillaWeb')
<table class="table">
  <div class="container col-12">
  <a href="/alquiler/create" class="btn btn-primary">Crear Alquiler</a>
  </div>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Fecha Alquiler </th>
        <th scope="col">Fecha Devolucion</th>
        <th scope="col">Nombre </th>
        <th scope="col">Cantidad</th>
        <th scope="col">Sub Total</th>
        <th scope="col">IVA</th>
        <th scope="col">Cliente id</th>
        <th scope="col">Pelicula id</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($alquilers as $alquiler)
        <tr>
            <th scope="row">{{$alquiler->id}}</th>
            <td>{{$alquiler->fechaAlquiler}}</td>
            <td>{{$alquiler->fechaDevulucion}}</td>
            <td>{{$alquiler->nombre}}</td>
            <td>{{$alquiler->cantidad}}</td>
            <td>{{$alquiler->subTotal}}</td>
            <td>{{$alquiler->iva}}</td>
            <td>{{$alquiler->cliente_id}}</td>
            <td>{{$alquiler->pelicula_id}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('alquiler.edit', $alquiler)}}" role="button">editar</a>
            </td>
            <td>
               <form action="{{route('alquiler.destroy',$alquiler->id)}}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danager btn-sm">Eliminar</button>
               </form>
            </td>
          </tr>
        @endforeach
     

    </tbody>
  </table>
  {{$alquilers->links()}}
@endsection
  