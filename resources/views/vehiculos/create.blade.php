@extends('layouts.main', ['activePage' => 'vehiculos', 'titlePage' => 'Nuevo Vehiculo'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('vehiculos.store') }}" id="commentForm" class="form-horizontal" name="frmAdd" id="frmAdd">
          @csrf
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Vehiculo</h4>
              <p class="card-category">Ingresar datos del nuevo vehiculo</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Numero de Vehiculo  </label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="numero_vehículo" id="numero_vehículo" placeholder="Ingrese el numero del vehiculo"
                    autocomplete="off" autofocus >
                    @error('numero_vehículo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Placa</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="placa" id="placa" placeholder="Ingrese la placa del Vehiculo"
                    autocomplete="on" autofocus>
                    @error('placa')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
             <div class="form-group col-md-3">
                <label for="inputState">Chasis</label>
                <select  name="chasis" class="form-control" id="chasis" >
                  {{-- <option value="Choose">Choose...</option> --}}
                  <option value="Microbus">Microbus</option>
                  <option value="Buseta">Buseta</option>
                  <option value="Buseton">Buseton</option>
                  <option value="Autobus">Autobus</option>
                  <option value="Articulado">Articulado</option>
                
                </select> 

                
               




                <label for="inputState">Tipologia(*)</label>
                <select  name="tipologia" class="form-control" id="tipologia_id" required >
                  {{-- <option value="Choose">Choose...</option> --}}
                  @foreach($tipos AS $tipo)
                  <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                  @endforeach
                </select>
                <label for="inputState">Fecha de matricula(*)</label>
                <input type="date" name="fecha_matricula" id="fecha_matricula">
                
              </div>
              
                                   
                    
                     
                      
                                  
               
              
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
{{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>  --}}
<script src="{{asset('js/core/jquery.min.js')}}"></script>
<script type="text/javascript">
console.log('js cargado');
  var $ = jQuery;
  jQuery(document).ready(function($){
    $('#numero_vehículo').prop('required',true);
    $('#placa').prop('required',true);
    //$('#chasis').attr("required", true);
     //$('#tipologia_id').prop('required',true)
    $('#fecha_matricula').prop('required',true)

    /* $('#chasis').onchange = function() {
     if (this.value="Choose") alert('Select something !');}

     $('#tipologia_id')[0].onchange = function() {
     if (this.value=='Choose') alert('Select something !'); } 
 */
 /* $('#chasis').addEventListener('change', function() {
          if(this.value==='Choose') //si la opcion seleccionada es activo
            {
              alert('Selecione una opcion para el campo Chasis !')
            }
            
        }); */

       $( "#chasis" ).validate({
        rules: {
        chasis: { required: true }
        }
});

  });

 

  

  </script>











   



