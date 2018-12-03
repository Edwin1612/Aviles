@extends('Usuarios.alumno.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-pen-alt-1  bg-c-blue card1-icon"></i>
          <div class="d-inline">
            <h4>Gramatica</h4>
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
            </li>
            <li class="breadcrumb-item"><a href="#!">Gramática</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          
          <h5 class="card-header-text">TEMAS</h5>
        </div>
        
        <div class="card-block accordion-block">
          <div id="accordion" role="tablist" aria-multiselectable="false">
             @foreach ($datos as $dato)
            <div class="accordion-panel">
              <div class="accordion-heading" role="tab" id="headingOne">
                <h3 class="card-title accordion-title">
                  <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#{{$dato->id}}" aria-expanded="true" aria-controls="{{$dato->id}}">{{$dato->nombre}}</a>
                </h3>
              </div>
              <div id="{{$dato->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="accordion-content accordion-desc">
                  <p>
                    {{$dato->descripcion}}
                  </p>
                 <br>
                  <a href="/Alumnos/Modulos/Gramatica/{{$dato->id}}"><button class="btn">Entrar</button></a> 
                </div>
              </div>
            </div>
             @endforeach
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
  @endsection