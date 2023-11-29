@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Dashboard </title>
<div class="container pb-5">
    <div class="paragon__btnRegresar">
        <div class="paragon__btnRegresar_content">
            <a href="{{ route('admin.tiposervicio.index') }}">
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
    <div class="row card_main_paragon">
        <div class="col-sm-6">
            <div class="card-paragon">
                <h5 class="card-title">Registra nuevo tipo de servicio</h5>
                <form action="{{ route ('admin.tiposervicio.store') }}" method="post">
                    @csrf
                    <h6 class="card-subtitle">Datos del servicio</h6>
                    <hr>
                    @include('layouts.partials.messages')
                    <div class="form-paragon">
                        <label for="">Nombre del servicio</label>
                        <input type="text" name="name" autofocus>
                    </div>
                    <div class="pt-5 text-end">
                        <button class="btn-paragon" type="submit"><i class="fa-regular fa-paper-plane"></i> &nbsp; Registrar</button>
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>
@endsection