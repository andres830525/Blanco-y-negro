@extends('layouts.main', ['activePage' => 'documentos', 'titlePage' => 'Nuevo documento'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('posts.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Documentos</h4>
              <p class="card-category">Ingresar datos del nuevo documento</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Nombre del documento</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="title" placeholder="Ingrese el nombre del documento"
                    autocomplete="off" autofocus>
                </div>
                
              </div>

              <label for="inputState">Fecha de expedición(*)</label>
                <input type="date" name="fecha_expedicion">

                <label for="inputState">Fecha de vencimiento(*)</label>
                <input type="date" name="fecha_vencimiento">

              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Valor del documento</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="valor" placeholder="Ingrese el valor del documento"
                    autocomplete="off" autofocus>
                    @error('valor')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>

              <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                    <span class="fileinput-new">Selecionar Documento</span>
                    
                    <input type="file" name="..." />
                </span>
                
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