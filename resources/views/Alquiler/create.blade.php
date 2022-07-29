@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('alquiler.store')}}" method="POST">
        {{csrf_field()}}
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label" >Fecha Alquiler</label>
            <div class="col-sm-10">
                <input type="date" step="1" name="fechaAlquiler">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Fecha Devolucion</label>
            <div class="col-sm-10">
                <input type="date" step="1" name="fechaDevulucion">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="nombre" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="cantidad" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Sub Total</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="subTotal" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">IVA</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="iva" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Cliente id</label>
            <div class="col-sm-10">
              <select type="number" class="form-control" id="colFormLabel" name="cliente_id" placeholder="col-form-label">
                @foreach ($clientes as $cliente )
                <option value="{{$cliente->id}}">{{$cliente->nombres}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Pelicula id</label>
            <div class="col-sm-10">
              <select type="number" class="form-control" id="colFormLabel" name="pelicula_id" placeholder="col-form-label">
                @foreach ($peliculas as $pelicula )
                <option value="{{$pelicula->id}}">{{$pelicula->nombre}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <input type="submit" name="btn_1" value="RegistroAlquiler">
    </form>
         
    </section>

    @endsection
  