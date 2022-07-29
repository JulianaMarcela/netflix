@extends('Template.Template')
@section('plantillaWeb')
<table class="table">
  <div class="container col-12">
  <a href="/cliente/create" class="btn btn-primary">Crear</a>
  </div>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombres</th>
        <th scope="col">TIPO DE DOCUMENTO </th>
        <th scope="col">Numero Documento</th>
        <th scope="col">Direccion</th>
        <th scope="col">Celular</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nombres}}</td>
            <td>{{$cliente->tipoDocumento}}</td>
            <td>{{$cliente->numDocumento}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->celular}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('cliente.edit', $cliente)}}" role="button">editar</a>
            </td>
            <td>
               <form action="{{route('cliente.destroy',$cliente->id)}}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danager btn-sm">Eliminar</button>
               </form>
            </td>
          </tr>
        @endforeach
     

    </tbody>
  </table>
  {{$clientes->links()}}
@endsection
  