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
    <div class="row card_main_paragon">
        <div class="col-sm-6">
            <div class="card-paragon">
                <div class="content_view">
                    <label for="">Nombre de servicio</label>
                    <h5 class="content_view_title">{{ $tiposervicio ['name'] }}</h5>
                    <hr>
                    <div class="content_view_details">
                        <h6><i class="fa-solid fa-clock"></i> &nbsp;Creación: {{ $tiposervicio ['created_at'] }}</h6>
                        <h6><i class="fa-solid fa-clock"></i> &nbsp;Update: {{ $tiposervicio ['updated_at'] }}</h6>
                    </div>
                </div>
                
                
           </div>
        </div>
    </div>
</div>
@endsection