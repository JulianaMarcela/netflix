<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('http://127.0.0.1:8000')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cliente.index')}}">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('alquiler.index')}}">Alquiler</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pelicula.index')}}">Pelicula</a>
        </li>
      </ul>
      @yield('plantillaWeb')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  

</body>
</html>

