@extends('Usuarios.alumno.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-lens bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>Avances</h4>
            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="page-header-breadcrumb">
          <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
              <a href="/Alumnos/1">
                <i class="icofont icofont-home"></i>
              </a>
            </li>
            <li class="breadcrumb-item"><a href="/Alumnos/Avance">Avances</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h2>Avances por modulos</h2>
      <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
      <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-12">
            <h4 align="center">AVANCE EN EL MODULO DEL HABLA</h4>
          </div>
          <div class="col-md-1 col-md-offset-5">
            <div data-label="100%" class="radial-bar radial-bar-100 radial-bar-lg radial-bar-default"></div>
          </div>
          
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-12">
            <h4 align="center">AVANCE EN EL MODULO DE LECTURA</h4>
          </div>
          <div class="col-md-1 col-md-offset-5">
            <div data-label="30%" class="radial-bar radial-bar-30 radial-bar-lg radial-bar-success"></div>
          </div>
          
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-12">
            <h4 align="center">AVANCE EN EL MODULO DE LA GRAMATICA</h4>
          </div>
          <div class="col-md-1 col-md-offset-5">
             <div data-label="60%" class="radial-bar radial-bar-60 radial-bar-lg radial-bar-warning"></div>
          </div>
          
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-12">
            <h4 align="center">AVANCE EN EL MODULO DEL ESCUCHA</h4>
          </div>
          <div class="col-md-1 col-md-offset-5">
            <div data-label="70%" class="radial-bar radial-bar-70 radial-bar-lg radial-bar-inverse"></div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection