@extends('Usuarios.alumno.layouts') @section('content')
<div class="page-wrapper">
  <!-- Page-header start -->
  <div class="page-header card">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="page-header-title">
          <i class="icofont icofont-layout bg-c-blue"></i>
          <div class="d-inline">
            <h4>Nombre del tema</h4>
            <span>Descripcion del tema lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
            <li class="breadcrumb-item"><a href="#!">Actividades</a>
            </li>
            </li>
            <li class="breadcrumb-item"><a href="#!">Inicio</a>
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
          
          <h5 class="card-header-text">Actividades</h5>
        </div>
        
        <div class="card-block accordion-block">
          <div id="accordion" role="tablist" aria-multiselectable="false">
            <?php for($i = 1; $i <= 10; $i++){ ?>
            <div class="accordion-panel">
              <div class="accordion-heading" role="tab" id="headingOne">
                <h3 class="card-title accordion-title">
                  <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#<?=$i?>" aria-expanded="true" aria-controls="<?=$i?>">Asi es</a>
                </h3>
              </div>
              <div id="<?=$i?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="accordion-content accordion-desc">
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                    with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  @endsection