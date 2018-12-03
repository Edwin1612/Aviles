@extends('Usuarios.administrador.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-users bg-c-blue"></i>
          <div class="d-inline">
            <h4>Usuarios</h4>
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
            <li class="breadcrumb-item"><a href="#!">Modulos</a>
            </li>
            </li>
            <li class="breadcrumb-item"><a href="#!">Usuarios</a>
            </li>
          </ul>
        </div>
      </div>
    </div><br>
    <div class="col-md-10">
      <a href="#ventana1" data-toggle="modal"><button class="btn">Agregar usuario</button></a>
    </div>
  </div>
</div>

<div class="modal fade" id="ventana1" align="center">
  <div class="modal-dialog">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title">Favor de ingresar lo siguiente</h4>
        </div>
        <div class="modal-body">
          <FORM action="add_usuario.php" method="POST">
            <div class="form-group">
              <label for="user" style="color:#111;">Nombre del ejercicio:</label>
              <input class="form-control" type="text" name="user" placeholder="Nombre" value="">
            </div>

            <div class="form-group">
              <label for="contrasena" style="color:#111;">Descripcion:</label>
              <input class="form-control" type="password" name="contrasena" placeholder="Contrasena">
            </div>
            <div class="form-group">
              <label for="contrasena" style="color:#111;">Modulos:</label>
              <select name="" id="" class="form-control">
                <option value="" >Gramatica</option>
                <option value="" >Lectura</option>
                <option value="" >Habla</option>
                <option value="" >Escucha</option>
              </select>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <input class="btn btn-info form-control inpbtm" type="submit" name="loguearse" value="Crear Ejercicio">
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-block table-border-style">
          <div class="table-responsive">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Tipo Usuario</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Edwin</td>
                          <td>1530405@upv.edu.mx</td>
                          <td>Alumno</td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>Dulce</td>
                          <td>Dulce@mail.com</td>
                          <td>Alumno</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>
@endsection