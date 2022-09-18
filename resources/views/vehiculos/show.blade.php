@extends('layouts.main', ['activePage' => 'vehiculos', 'titlePage' => 'Detalles del vehiculo'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Vehiculo</div>
            <p class="card-category">Vista detallada del vehiculo {{ $vehiculo->numero_vehiculo }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $vehiculo->numero_vehículo }}</h5>
                        </a>
                        <p class="description">
                        {{ $vehiculo->placa }} <br>
                        {{ $vehiculo->chasis }} <br>
                        {{ $vehiculo->tipologia->nombre }} <br>
                        {{ $vehiculo->fecha_matricula }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('vehiculos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="#" class="btn btn-sm btn-twitter"> Editar </a>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->

             

             

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
