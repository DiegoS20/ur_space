@extends('templates.base')

@section('styles')
  <style>
    .container.tabs {
      margin-top: 7%;
    }
  </style>
@endsection

@section('content')
  <div class="container tabs">
    <ul class="nav nav-fill" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Favoritos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">Reservados</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <!--Contenedor de las cards-->
        <div class="container">
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
        <div class="container">
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
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
