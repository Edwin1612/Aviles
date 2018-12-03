@extends('Usuarios.alumno.layouts')

@section('content')

<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-user-alt-3 bg-c-blue"></i>
          <div class="d-inline">
            <h4>Perfil</h4>
            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="page-header-breadcrumb">
          <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
              <a href="index.html">
                <i class="icofont icofont-home"></i>
              </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Perfil</a>
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
      
      <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-3">
            <h4 align="right">Foto de perfil:</h4>
            <br>
          </div>
          <div class="col-md-9">
            <img src="{{asset('/default/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
          </div>         
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-3">
            <h4 align="right">ID:</h4>
          </div>
          <div class="col-md-9">
            <h5 algin="left">{{ $user->id }}</h5>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-3">
            <h4 align="right">Nombre:</h4>
          </div>
          <div class="col-md-9">
            <h5 algin="left">{{ $user->name }}</h5>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <div class="row" center>
          <div class="col-md-3">
            <h4 align="right">Correo:</h4>
          </div>
          <div class="col-md-9">
             <h5 align="left">{{ $user->email }}</h5>
          </div>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>


@endsection