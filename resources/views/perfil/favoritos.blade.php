@extends('templates.base')

@section('styles')
  <style>
    .container.tabs {
      margin-top: 7%;
    }
  </style>

  <link rel="stylesheet" href="{{ mix('css/estate.css') }}">

@endsection

@section('content')
  <div class="container tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Favoritos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">Reservados</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <!--Contenedor de las cards-->
        <div class="container py-5">
          <div class="row d-flex pb-5">
            <div class="col-md-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <!--card 2-->
            <div class="col-md-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <!--segunda fila-->
            <div class="col-md-3 py-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <!--card 2-->
            <div class="col-md-3 py-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 py-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 py-3">
              <div class="card cardMercado">
                <a href="detalleProp.html">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!--NO TOCAR POR EL AMOR DE DIOS Y NO PREGUNTAR TAMPOCO XD-->
        </div>
      </div>
      <!-- tab-pane fade -->

      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container py-5">
          <div class="row d-flex pb-5">
            <div class="col-md-3">
              <div class="card cardMercado">
                <a href="detalleProp.html" data-bs-toggle="modal" data-bs-target="#reservaDet">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card cardMercado">
                <a href="detalleProp.html" data-bs-toggle="modal" data-bs-target="#reservaDet">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
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
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal detalle de reserva -->
  <div>
    <div class="modal fade" id="reservaDet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
              Detalle de Reserva
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="d-flex align-items-center py-3 px-4">
              <img class="pe-2" src="/images/foto.svg" class="rounded-circle" width="50">
              <a href="perfil.html" target="_blank" style="font-weight: bold; color: black;">Alejandra Reyes</a>
            </div>

            <div class="d-flex px-4">

              <p class="pe-3" style="font-weight: bold;">Seine Bight</p>
              <p class="pe-2" style="font-weight: bold;">Precio: </p>
              <p>$1500.00</p>
              
            </div>
            <div class="px-4">
              <p style="font-weight: bold;">Descripción</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis dolorem nobis ut? Ipsum mollitia
                laudantium consequatur sit! Odit porro ratione animi cumque doloribus vel ut dolorum eos sed soluta,
                excepturi cum numquam aspernatur rem! Est, repellat ipsum quas harum pariatur veniam omnis quidem eum
                perferendis fuga, nisi placeat et nostrum!</p>
              <p style="font-weight: bold;">Datos de facturación</p>

              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Nombre</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <span class="input-group-text" id="basic-addon3">Adriana Jacobo</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <span class="input-group-text" id="basic-addon3">adriana.jacobo@gmail.com</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Teléfono</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <span class="input-group-text" id="basic-addon3">(239) 816-9029</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Movil</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <span class="input-group-text" id="basic-addon3">(239) 816-9029</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Fecha</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <span class="input-group-text" id="basic-addon3">dd/mm/yyyy</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Hora de inicio estimada</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <span class="input-group-text" id="basic-addon3">00:00</span>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12 text-secondary">
                  <p><i class="fas fa-solid fa-triangle-exclamation" style="color: #808389;"></i> Las horas de reserva o
                    la duración del evento deberán discutirse con el propietario</p>
                </div>
              </div>

              <div class="row pb-3">
                <p style="font-weight: bold;">Datos de tarjeta</p>
                <div class="col-md-6">
                  <label for="numtarjeta" class="form-label">Número de Tarjeta</label>
                  <span class="input-group-text" id="basic-addon3">XXXX-XXXX-XXXX-0000</span>
                </div>
                <div class="col-md-6">
                  <label for="fechaTarjeta" class="form-label">Fecha de Vencimiento</label>
                  <span class="input-group-text" id="basic-addon3">00/00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
