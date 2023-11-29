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
        <h5 class="card-title">Registra nuevo contribuyente</h5>

        <!-- Datos del contribuyente -->
        <h6 class="card-subtitle">Datos del contribuyente</h6>
        <hr>
        <div class="row">
            <div class="col-3 form-paragon">
                <label for="">Tipo de documento</label>
                <select name="tipodoc" id="tipodoc">
                    <option value="">Selecione</option>
                    @foreach ($tipodocs as $tipodoc)
                    <option value="{{ $tipodoc ['id'] }}">{{ $tipodoc ['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Nro de doc.</label>
                <input  type="number">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-paragon">
                <label for="">Nombres</label>
                <input  type="text">
            </div>
            <div class="col-4 form-paragon">
                <label for="">Apellido paterno</label>
                <input  type="text">
            </div>
            <div class="col-4 form-paragon">
                <label for="">Apellido materno</label>
                <input  type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-3 form-paragon">
                <label for="">Departamento</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Provincia</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Distrito</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Urbanización</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-4 form-paragon">
                <label for="">Dirección</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-2 form-paragon">
                <label for="">Nro</label>
                <input  type="number">
            </div>
            <div class="col-2 form-paragon">
                <label for="">Manzana</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-2 form-paragon">
                <label for="">Lote</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-2 form-paragon">
                <label for="">Sub-Lote</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
        </div>
        <!-- Fin Datos del contribuyente -->
        <!-- Datos del predio -->
        <h6 class="pt-5 card-subtitle">Datos del predio</h6>
        <hr>
        <div class="row">
            <div class="col-3 form-paragon">
                <label for="">Departamento</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Provincia</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Distrito</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3 form-paragon">
                <label for="">Urbanización</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-4 form-paragon">
                <label for="">Dirección</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-2 form-paragon">
                <label for="">Nro</label>
                <input  type="number">
            </div>
            <div class="col-2 form-paragon">
                <label for="">Manzana</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-2 form-paragon">
                <label for="">Lote</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-2 form-paragon">
                <label for="">Sub-Lote</label>
                <select name="" id="" class="">
                    <option value="">Calle, AV, Jr. Otros</option>
                    <option value="">DNI</option>
                    <option value="">Carne de extranjeria</option>
                    <option value="">Pasaporte</option>
                </select>
            </div>
        </div>
        <!-- Fin Datos del predio -->
        <!-- Tipo de predio -->
        <h6 class="pt-5 card-subtitle">Tipo de predio</h6>
        <hr>
        <div class="form-check-paragon row align-items-center">
            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Independiente
                    </label>
                  </div>
            </div>
            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Sub división
                    </label>
                  </div>
            </div>
            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Edifico Familar
                    </label>
                  </div>
            </div>
            <div class="col-3 form-paragon mb-3">
                <input  type="number" placeholder="Número de piso" cl>
            </div>
        </div>
        <div class="row form-check-paragon">
            <div class="col-4">
                <h6>Servicio solicitado</h6>
                @foreach ($tiposervicio as $id => $servicio)
                <div class="form-check">
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" value="{{ $id }}" name="tiposervicio[]" id="flexCheckDefault">
                        </td>
                        <td>
                            {{ $servicio }}
                        </td>
                    </tr>
                </div>
                @endforeach
            </div>
            <div class="col-4">
                <h6>Uso del servicio</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Domestico
                    </label>
                </div>
                
            </div>
            <div class="col-3">
                <h6>Estado del predio</h6>
                
            </div>
        </div> 
        <div class="row form-check-paragon">
            <div class="col-4">
                <label for="">Conexion existente en el predio</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Ninguna
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      (1) Uno
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      (2) Dos
                    </label>
                </div>
            </div>
            <div class="col-4">
                <label for="">Estado de la via </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Sin asfalto y/o vereda
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Con asfalto y/o vereda
                    </label>
                </div>
                
            </div>
            <div class="col-3">
                <h6>Documentos presentados</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      En construcción
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      En construcción
                    </label>
                </div>
                  
            </div>
        </div>
        <!-- Fin Tipo de predio -->
        <div class="pt-5 text-end">
            <button class="btn-paragon"><i class="fa-regular fa-paper-plane"></i> &nbsp; Registrar</button>
        </div>
   </div>
</div>
@endsection