@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Dashboard </title>
<div class="container">
  <h5 class="paragon__title">Dashboard</h5>
  <h6>Hoy, {{ date('d')}}&nbsp;{{ date('M')}} de {{ date('Y') }}</h6>
  <div class="row">
      <div class="col-sm-3 component__main">
          <div class="dashboard__card">
            <div class="dashboard__card_content">
                <h5 class="dashboard__card_title">Contribuyentes</h5>
                <div class="dashboard__card_date">
                  <h5>600</h5>
                </div>
                <p>Vista total de los contribuyentes</p>
            </div>        
          </div>
      </div>
      <div class="col-sm-3 component__main">
        <div class="dashboard__card">
          <div class="dashboard__card_content">
              <h5 class="dashboard__card_title">Ingresos</h5>
              <div class="dashboard__card_date">
                <h5>S/ 30.20</h5>
              </div>
              <p>Vista total de los ingresos</p>
          </div>        
        </div>
    </div>
    <div class="col-sm-3 component__main">
      <div class="dashboard__card">
        <div class="dashboard__card_content">
            <h5 class="dashboard__card_title">Egresos</h5>
            <div class="dashboard__card_date">
              <h5>S/ 100.00</h5>
            </div>
            <p>Vista total de los egresoss</p>
        </div>        
      </div>
    </div>
    <div class="col-sm-3 component__main">
      <div class="dashboard__card">
        <div class="dashboard__card_content">
            <h5 class="dashboard__card_title">Contribuyentes</h5>
            <div class="dashboard__card_date">
              <h5>600</h5>
            </div>
            <p>Vista total de los contribuyentes</p>
        </div>        
      </div>
    </div>
</div>
@endsection