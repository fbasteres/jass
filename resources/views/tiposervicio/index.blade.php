@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Dashboard </title>
<div class="container pb-5">
    <div class="paragon__btnRegresar">
        <div class="paragon__btnRegresar_content">
            <a href="{{ route('componentes') }}">
                <button class="paragon__btnRegresar_content_button">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;Atrás
                </button>        
            </a>
        </div>
    </div>
    <div class="link-paragon">
        <a href="{{ route ('admin.tiposervicio.index') }}">
            <h5 class="{{ 'componentes/tiposervicio' == request()->path() ? 'active' : '' }}">Tipo de servicio</h5>
        </a>
        <a href="{{ route ('admin.tiposervicio.create') }}">
            <h5 class="{{ 'componentes/tiposervicio/create' == request()->path() ? 'active' : '' }}">Nuevo tipo de servicio</h5>
        </a>
    </div>
    <div class="card-paragon">
        @include('layouts.partials.messages')
        <div class="card_paragon_cargamasiva">
            <h5 class="card-title">Tipo de servicio</h5>
            <a href="" class="disabled"><i class="fa-solid fa-database"></i> &nbsp;Carga masiva</a>
        </div>
        
        <div class="car-inf">
            <table id="tabla_tusuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Fecha de creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiposervicio as $servicio)
                    <tr>
                        <td>{{ $servicio['id']}}</td>
                        <td>{{ $servicio['name']}}</td>
                        <td>{{ $servicio['created_at']}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route ('admin.tiposervicio.show', $servicio -> id )}}" class="paragon__icon">
                                    <div class="paragon__icon_action">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                </a>
                                <a href="{{route ('admin.tiposervicio.edit', $servicio -> id )}}" class="paragon__icon">
                                    <div class="paragon__icon_action">
                                        <i class="fa-solid fa-pencil"></i>
                                    </div>
                                </a>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>

        
   </div>
</div>
@include ('layouts.partials.datatable')
@endsection