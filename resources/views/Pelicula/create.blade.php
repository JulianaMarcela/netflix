@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('pelicula.store')}}" method="POST">
        {{csrf_field()}}
        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel"name="nombre" placeholder="col-form-label">
          </div>
        </div>
        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Descripcion</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel"name="descripcion" placeholder="col-form-label">
          </div>
        </div>
        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Genero</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel"name="genero" placeholder="col-form-label">
          </div>
        </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Año de creacion</label>
            <div class="col-sm-10">
                <input type="date" step="1" name="anoCreacion">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Existencias</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="existencia" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Valor del Alquiler </label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="valorAlquiler" placeholder="col-form-label">
            </div>
          </div>

          <input type="submit" name="btn_1" value="RegistroPelicula">
    </form>
         
    </section>

    @endsection
  