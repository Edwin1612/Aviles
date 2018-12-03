@extends('Usuarios.administrador.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-pencil-alt-5 bg-c-blue"></i>
          <div class="d-inline">
            <h4>Ejercicios</h4>
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
            <li class="breadcrumb-item"><a href="#!">Ejercicios</a>
            </li>
          </ul>
        </div>
      </div>
    </div><br>
    <div class="col-md-10">
      <a href="#ventana1" data-toggle="modal"><button class="btn">Agregar Escucha</button></a>
      <a href="#ventana2" data-toggle="modal"><button class="btn">Agregar Habla</button></a>
      <a href="#ventana1" data-toggle="modal"><button class="btn">Agregar Lectura</button></a>
      <a href="#ventana4" data-toggle="modal"><button class="btn">Agregar Gramatica</button></a>
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
                          <th rowspan="1" colspan="1" width="15%">Nombre</th>
                          <th rowspan="1" colspan="1" width="70%">Descripcion</th>
                          <th rowspan="1" colspan="1" width="75%">Tema</th>
                          <th rowspan="1" colspan="1" width="5%">Borrar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($datos as $dato)
                      <tr>
                          <td>{{$dato->nombre}}</td>
                          <td>{{$dato->descripcion}}</td>
                          <td>{{$dato->temas_id}}</td>
                          <td rowspan="1" colspan="1">
                            <form action="/Administrador/Ejercicio/Borrar/{{$dato->id}}" method="POST">
                              {{csrf_field()}}
                              <button class="btn btn-danger" type="submit">Borrar</button>
                            </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>


<div class="modal fade" id="ventana4" align="center">
  <div class="modal-dialog">
    <div class="modal-content">
      <div>
        <div class="modal-header">
          <h4 class="modal-title">Favor de ingresar lo siguiente</h4>
        </div>
        <div class="modal-body">
          <FORM action="/Administrador/Ejercicios/Agregar" enctype="multipart/form-data" method="POST" >
            {{csrf_field()}}
            <div class="form-group">
              <label for="user" style="color:#111;">Nombre del ejercicio:</label>
              <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="">
            </div>

            <div class="form-group">
              <label for="user" style="color:#111;">Descripcion:</label>
                <textarea rows="4" cols="50" class="form-control" placeholder="Descripcion" name="descripcion"></textarea>
            </div>
            
            <div class="form-group">
              <label for="user" style="color:#111;">Tema:</label>
              <select name="temas_id" id="" class="form-control">
                @foreach ($temas as $tema)
                <option value="{{$tema->id}}">{{$tema->nombre}}</option>
                @endforeach
              </select>
            </div>
            
            <div class="form-group">
              <label for="user" style="color:#111;">Pregunta:</label>
                <textarea rows="4" cols="50" class="form-control" placeholder="Pregunta" name="pregunta"></textarea>
            </div>
            
            <div class="form-group">
              <label for="user" style="color:#111;">Foto:</label>
                <input type="file" class="form-control" name="foto"></input>
            </div>
            
            <div class="form-group">
              <label for="user" style="color:#111;">Respuesta correcta:</label>
              <input class="form-control" type="text" name="r1" placeholder="Respuesta" >
              <label for="user" style="color:#111;">Respuesta 2:</label>
              <input class="form-control" type="text" name="r2" placeholder="Respuesta" >
              <label for="user" style="color:#111;">Respuesta 3:</label>
              <input class="form-control" type="text" name="r3" placeholder="Respuesta" >
              <label for="user" style="color:#111;">Respuesta 4:</label>
              <input class="form-control" type="text" name="r4" placeholder="Respuesta" >
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <input class="btn btn-info form-control inpbtm" type="submit" value="Crear Ejercicio">
              </div>
            </div>
          </FORM>
        </div>
      </div>
    </div>
  </div>

@endsection