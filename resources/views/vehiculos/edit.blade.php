@extends('layouts.main', ['activePage' => 'vehiculos', 'titlePage' => 'Editar Vehiculo'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{  route('vehiculos.update', $vehiculo->id) }}" class="form-horizontal" name="frmAdd" id="frmAdd">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Vehiculo</h4>
              <p class="card-category">Actualizar datos del  vehiculo</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Numero de Vehiculo </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="numero_vehículo" value="{{ old('numero_vehículo', $vehiculo->numero_vehículo) }}" placeholder="Ingrese el numero del vehiculo"
                    autocomplete="off" autofocus>
                    @error('numero_vehículo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Placa</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="placa" value="{{ old('placa', $vehiculo->placa) }}" placeholder="Ingrese la placa del Vehiculo"
                    autocomplete="on" autofocus>
                    @error('placa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Chasis(*)</label>
                <select name="chasis" class="form-control" id="chasis">
                  <option selected>{{ old('chasis', $vehiculo->chasis) }}</option>
                  <option value="Microbus">Microbus</option>
                  <option value="Buseta">Buseta</option>
                  <option value="Buseton">Buseton</option>
                  <option value="Autobus">Autobus</option>
                  <option value="Articulado">Articulado</option>
                
                </select>
                <label for="inputState">Tipologia(*)</label>
                <select required="required" name="tipologia"  class="form-control" id="tipologia_id" >
                  <option selected>Choose...</option>
                  @foreach($tipos AS $tipo)
                  <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                  @endforeach
                </select>
                <label for="inputState">Fecha de matricula(*)</label>
                <input type="date" name="fecha_matricula" value="{{ old('fecha_matricula', $vehiculo->fecha_matricula) }}">
                
              </div>
              
                                   
                    
                     
                      
                                  
               
              
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection