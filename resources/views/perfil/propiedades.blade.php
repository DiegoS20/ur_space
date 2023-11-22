@extends('templates.base')

@section('styles')
  <link rel="stylesheet" href="{{ mix('css/estate.css') }}">
@endsection

@section('content')
  <div class="container" style="margin-top: 7%">
    <div class="container tabs">
      <br />

      <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Tus reservas </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Mis propiedades</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent" style="padding-top: 50px">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <!--Contenedor de las cards-->
          <div class="container">
            <div class="row d-flex pb-5">
              <!--cards reservas-->
              <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                  <div class="card-body">
                    <div class="row ">
                      <p><i class="fa-solid fa-user fa-2xl" style="color: #8307bd;"></i> John
                        Kenedy </h1>
                      </p>
                    </div>
                    <p class="card-text">Fecha: 22/03/23</p>
                    <p class="card-text">Estado: En curso</p>
                    <div class="row">
                      <div class="col-md-6">
                        <a class="btn1 btn">Enviar Mensaje</a>
                      </div>
                      <div class="col-md-6">
                        <a class="btn1 btn">Detalles de Reserva</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                  <div class="card-body">
                    <div class="row ">
                      <p><i class="fa-solid fa-user fa-2xl" style="color: #8307bd;"></i> Erick
                        Rivera </h1>
                      </p>
                    </div>
                    <p class="card-text">Fecha: 15/06/23</p>
                    <p class="card-text">Estado: En curso</p>
                    <div class="row">
                      <div class="col-md-6">
                        <a class="btn1 btn">Enviar Mensaje</a>
                      </div>
                      <div class="col-md-6">
                        <a class="btn1 btn">Detalles de Reserva</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                  <div class="card-body">
                    <div class="row ">
                      <p><i class="fa-solid fa-user fa-2xl" style="color: #8307bd;"></i> Fatima
                        Alarcon </h1>
                      </p>
                    </div>
                    <p class="card-text">Fecha: 18/04/23</p>
                    <p class="card-text">Estado: En curso</p>
                    <div class="row">
                      <div class="col-md-6">
                        <a class="btn1 btn">Enviar Mensaje</a>
                      </div>
                      <div class="col-md-6">
                        <a class="btn1 btn">Detalles de Reserva</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- tab-pane fade -->

        <!--INICIO TAB MIS PROPIEDADES-->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="container">

            <p class="simb">
              <i class="fa-solid fa-plus fa-xl" style="color: #8307bd;"></i>
            </p>

            <div class="row d-flex pb-5">
              <div class="col-md-3">
                <div class="card cardMercado">
                  <a href="detalleProp.html">
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="/images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade1" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade1" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                      </a>
                    </div>

                    <div class="card-body">
                      <div class="row d-flex justify-content-between">
                        <div class="col-6 d-flex align-items-center" style="font-weight: bold">
                          Seine Bight
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                          <i class="fas fa-solid fa-star" style="color: #8307bd"></i>
                          4.9 (102)
                        </div>
                      </div>
                      <p>
                        <i class="fa-solid fa-people-group" style="color: #000000"></i>
                        100 personas
                      </p>
                      <p class="card-text">
                        <b>$1,500.00</b>
                      </p>
                      <div class="row">
                        <div class="col-md-6" data-bs-toggle="modal" data-bs-target="#editar">
                          <a id="abrirModal" class="btn1 btn">Editar</a>
                        </div>
                        <div class="col-md-6">
                          <a class="btn1 btn">Borrar</a>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card cardMercado">
                  <a href="detalleProp.html">
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="/images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade1" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade1" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                      </a>
                    </div>

                    <div class="card-body">
                      <div class="row d-flex justify-content-between">
                        <div class="col-6 d-flex align-items-center" style="font-weight: bold">
                          Seine Bight
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                          <i class="fas fa-solid fa-star" style="color: #8307bd"></i>
                          4.9 (102)
                        </div>
                      </div>
                      <p>
                        <i class="fa-solid fa-people-group" style="color: #000000"></i>
                        100 personas
                      </p>
                      <p class="card-text">
                        <b>$1,500.00</b>
                      </p>
                      <div class="row">
                        <div class="col-md-6" data-bs-toggle="modal" data-bs-target="#editar">
                          <a id="abrirModal" class="btn1 btn">Editar</a>
                        </div>
                        <div class="col-md-6">
                          <a class="btn1 btn">Borrar</a>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card cardMercado">
                  <a href="detalleProp.html">
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="/images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade1" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade1" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                      </a>
                    </div>

                    <div class="card-body">
                      <div class="row d-flex justify-content-between">
                        <div class="col-6 d-flex align-items-center" style="font-weight: bold">
                          Seine Bight
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                          <i class="fas fa-solid fa-star" style="color: #8307bd"></i>
                          4.9 (102)
                        </div>
                      </div>
                      <p>
                        <i class="fa-solid fa-people-group" style="color: #000000"></i>
                        100 personas
                      </p>
                      <p class="card-text">
                        <b>$1,500.00</b>
                      </p>
                      <div class="row">
                        <div class="col-md-6" data-bs-toggle="modal" data-bs-target="#editar">
                          <a id="abrirModal" class="btn1 btn">Editar</a>
                        </div>
                        <div class="col-md-6">
                          <a class="btn1 btn">Borrar</a>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card cardMercado">
                  <a href="detalleProp.html">
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="/images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="/images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade1" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade1" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                      </a>
                    </div>

                    <div class="card-body">
                      <div class="row d-flex justify-content-between">
                        <div class="col-6 d-flex align-items-center" style="font-weight: bold">
                          Seine Bight
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                          <i class="fas fa-solid fa-star" style="color: #8307bd"></i>
                          4.9 (102)
                        </div>
                      </div>
                      <p>
                        <i class="fa-solid fa-people-group" style="color: #000000"></i>
                        100 personas
                      </p>
                      <p class="card-text">
                        <b>$1,500.00</b>
                      </p>
                      <div class="row">
                        <div class="col-md-6" data-bs-toggle="modal" data-bs-target="#editar">
                          <a id="abrirModal" class="btn1 btn">Editar</a>
                        </div>
                        <div class="col-md-6">
                          <a class="btn1 btn">Borrar</a>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--modal boton editar propiedades-->
      <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
                Editar
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="row d-flex px-4">
                <div class="col-mb-3">
                  <h6 class="mb-3">Nombre</h6>
                </div>
                <div class="col-sm-4 text-secondary">
                  <input type="text" class="form-control" value="Seine Bight" />
                </div>
              </div>

              <br />

              <div class="px-4">
                <p style="font-weight: bold">Descripción</p>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Inserte una nueva descripción</label>
                </div>
                <br>
                <p style="font-weight: bold">Datos de la propiedad</p>

                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Capacidad</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" value="100 personas" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Dirección</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" value="Santa Ana, El Salvador" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Precio</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" value="$1,500.00" />
                  </div>
                </div>
                <div class="row d-flex justify-content-center">
                  <input type="button" class="btn btn-purple1 px-4" value="Guardar " style="width: 30%" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
