@extends('Template.Template')
@section('plantillaWeb')
<table class="table">
  <div class="container col-12">
  <a href="/pelicula/create" class="btn btn-primary">Crearregistro de peliculas</a>
  </div>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Genero </th>
        <th scope="col">Año de creacion</th>
        <th scope="col">Nuemero de existencias</th>
        <th scope="col">Valor del Alquiler</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($peliculas as $pelicula)
        <tr>
            <th scope="row">{{$pelicula->id}}</th>
            <td>{{$pelicula->nombre}}</td>
            <td>{{$pelicula->descripcion}}</td>
            <td>{{$pelicula->genero}}</td>
            <td>{{$pelicula->anoCreacion}}</td>
            <td>{{$pelicula->existencia}}</td>
            <td>{{$pelicula->valorAlquiler}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('pelicula.edit', $pelicula)}}" role="button">editar</a>
            </td>
            <td>
               <form action="{{route('pelicula.destroy',$pelicula->id)}}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danager btn-sm">Eliminar</button>
               </form>
            </td>
          </tr>
        @endforeach
     

    </tbody>
  </table>
  {{$peliculas->links()}}
@endsection