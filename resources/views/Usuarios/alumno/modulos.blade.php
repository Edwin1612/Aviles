@extends('Usuarios.alumno.layouts')

@section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-cubes bg-c-blue"></i>
          <div class="d-inline">
            <h4>Modulos</h4>
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
            <li class="breadcrumb-item"><a href="#!">Modulos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card widget-card-1">
        <div class="card-block-small">
          <i class="icofont icofont-pen-alt-1  bg-c-blue card1-icon"></i>
          <a href="/Alumnos/Modulos/Gramatica"><span class="text-c-blue f-w-600">Gramatica</span></a>
          <h4>-----</h4>
          <div class="col-md-12">
              <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, voluptate eos iste. Cum repellat odit tempore alias ullam reprehenderit error eius, voluptas facere. Necessitatibus quidem numquam, praesentium, veritatis unde harum.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card widget-card-1">
        <div class="card-block-small">
          <i class="icofont icofont-listening bg-c-blue card1-icon"></i>
          <a href="/Alumnos/Modulos/Escucha"><span class="text-c-blue f-w-600">Escucha</span></a>
          <h4>-----</h4>
          <div class="col-md-12">
              <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, voluptate eos iste. Cum repellat odit tempore alias ullam reprehenderit error eius, voluptas facere. Necessitatibus quidem numquam, praesentium, veritatis unde harum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card widget-card-1">
        <div class="card-block-small">
          <i class="icofont icofont-read-book bg-c-blue card1-icon"></i>
          <a href="/Alumnos/Modulos/Lectura"><span class="text-c-blue f-w-600">Lectura</span></a>
          <h4>-----</h4>
          <div class="col-md-12">
              <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, voluptate eos iste. Cum repellat odit tempore alias ullam reprehenderit error eius, voluptas facere. Necessitatibus quidem numquam, praesentium, veritatis unde harum.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card widget-card-1">
        <div class="card-block-small">
          <i class="icofont icofont-speech-comments bg-c-blue card1-icon"></i>
          <a href="/Alumnos/Modulos/Hablado"><span class="text-c-blue f-w-600">Hablado</span></a>
          <h4>-----</h4>
          <div class="col-md-12">
              <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, voluptate eos iste. Cum repellat odit tempore alias ullam reprehenderit error eius, voluptas facere. Necessitatibus quidem numquam, praesentium, veritatis unde harum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection