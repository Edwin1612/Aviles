@extends('Usuarios.administrador.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-listing-number bg-c-blue"></i>
          <div class="d-inline">
            <h4>Temas</h4>
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
            <li class="breadcrumb-item"><a href="#!">Temas</a>
            </li>
          </ul>
        </div>
      </div>
    </div><br>
    <div class="col-md-10">
      <a href="#ventana1" data-toggle="modal"><button class="btn">Agregar tema</button></a>
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
          <FORM action="/Administrador/Temas/Guardar" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="user" style="color:#111;">Nombre del tema:</label>
              <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="">
            </div>

            <div class="form-group">
              <label for="contrasena" style="color:#111;">Descripcion:</label>
              <input class="form-control" type="text" name="descripcion" placeholder="Contrasena">
            </div>
            
            <div class="form-group">
              <label for="contrasena" style="color:#111;">Puntaje:</label>
              <input class="form-control" type="number" name="puntaje" placeholder="Puntaje">
            </div>
            <div class="form-group">
              <label for="contrasena" style="color:#111;">Modulos:</label>
              <select name="modulo" id="" class="form-control">
                <option value="1" >Gramatica</option>
                <option value="2" >Lectura</option>
                <option value="3" >Habla</option>
                <option value="4" >Escucha</option>
              </select>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <button type="submit" class="btn">Enviar</button>
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
                  <th rowspan="1" colspan="1" width="15%">Nombre</th>
                  <th rowspan="1" colspan="1" width="70%">Descripcion</th>
                  <th rowspan="1" colspan="1" width="75%">Modulo</th>
                  <th rowspan="1" colspan="1" width="5%">Borrar</th>
                  </th>
                </thead>
                  <tbody>
                      @foreach ($datos as $dato)
                      <tr>
                          <td>{{ $dato->nombre }}</td>
                          <td>{{ $dato->descripcion }}</td>
                          <td>{{ $dato->tipoModulo }}</td>
                          <td rowspan="1" colspan="1">
                            <form action="/Administrador/Temas/Borrar/{{$dato->id}}" method="POST">
                              {{csrf_field()}}
                              <button class="btn btn-danger" type="submit">Enviar</button>
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
@endsection