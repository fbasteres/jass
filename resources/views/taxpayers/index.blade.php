@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Dashboard </title>
<div class="container pb-5">
    <div class="link-paragon">
        <a href="{{ route ('admin.contribuyentes.index') }}">
            <h5 class="{{ 'contribuyentes' == request()->path() ? 'active' : '' }}">Contribuyentes</h5>
        </a>
        <a href="{{ route ('admin.contribuyentes.create') }}">
            <h5 class="{{ 'contribuyentes/create' == request()->path() ? 'active' : '' }}">Nuevo contribuyente</h5>
        </a>
    </div>
    <div class="card-paragon">
        <h5 class="card-title">Lista de contribuyentes</h5>

        
   </div>
</div>
@endsection