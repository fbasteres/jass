@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Dashboard </title>
<div class="container">
    <h5 class="paragon__title">Componentes del sistema</h5>
    <div class="row">
        <div class="col-sm-3 component__main">
            <a href="{{ route('admin.tiposervicio.index') }}">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Tipos de servicio</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-3 component__main">
            <a href="">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Uso del servicio</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-3 component__main">
            <a href="">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Documentos</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-3 component__main">
            <a href="">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Calles</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-3 component__main">
            <a href="">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Manzana</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-3 component__main">
            <a href="">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Lote</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor, sit </p>
                </div>
            </a>
        </div>
        <div class="col-sm-3 component__main">
            <a href="">
                <div class="component__card">
                    <div class="component__card_content_icon">
                        <h5 class="component__card_title">Sub-Lote</h5>
                        <div class="component__card_icon">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection