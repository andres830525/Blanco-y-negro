@extends('layouts.main', ['activePage' => 'vehiculos', 'titlePage' => 'Vehiculos'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Vehiculos</h4>
                    <p class="card-category">Vehiculos registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        @can('user_create')
                        <a href="{{ route('vehiculos.create') }}" class="btn btn-sm btn-facebook">Añadir Vehiculo</a>
                        @endcan
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3 text-right">

                    <form class="navbar-form">
                      <div class="input-group no-border">
                      <input id="search" type="text" value="" class="form-control" placeholder="Search...">
                      <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                      </button>
                      </div>
                    </form>

                  </div>
                </div>


                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Numero</th>
                          <th>Placa</th>
                          <th>Chasis</th>
                          <th>Tipologia</th>
                          <th>Fecha de matricula</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody>
                          @foreach ($vehiculos as $vehiculo)
                            <tr>
                              <td>{{ $vehiculo->id }}</td>
                              <td>{{ $vehiculo->numero_vehículo }}</td>
                              <td>{{ $vehiculo->placa }}</td>
                              <td>{{ $vehiculo->chasis }}</td>
                              <td>{{ $vehiculo->tipologia->nombre }}</td>
                              <td>{{ $vehiculo->fecha_matricula }}</td>
                              <td class="td-actions text-right">
                                @can('user_show')
                                <a href="{{ route('documet.add', $vehiculo->id) }}" class="btn btn-info"><i class="material-icons">file_present</i></a>
                                @endcan
                                @can('user_show')
                                <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                @endcan
                                @can('user_edit')
                                <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                @endcan
                                @can('user_destroy')
                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Esta Seguro que quiere Eliminar este vehiculo?')">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger" type="submit" rel="tooltip">
                                    <i class="material-icons">close</i>
                                    </button>
                                </form>
                                @endcan
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer mr-auto">
                    {{ $vehiculos->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('js')
<script>
    var vehiculos = ['php','laravel'];
      $('#search').autocomplete({
      source: vehiculos

      });

</script>
@endsection


