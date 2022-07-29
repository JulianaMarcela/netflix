@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('cliente.update',$cliente)}}" method="POST">
        @method('PUT')
        {{csrf_field()}}
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label" >Nombres</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="nombres" value="{{$cliente->nombres}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Tipo Documento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="tipoDocumento"  value="{{$cliente->tipoDocumento}}"placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Numero de Documento</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="numDocumento"  value="{{$cliente->numDocumento}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel" name="direccion"  value="{{$cliente->direccion}}"placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Celular</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="celular"  value="{{$cliente->celular}}" placeholder="col-form-label">
            </div>
          </div>

          <input type="submit" name="btn_1" value="RegistroCliente">
    </form>
         
    </section>

    @endsection