@extends('templates.base');

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
  <div class="container" style="margin-top: 8%">
    <h3 style="font-weight: bold">Mi Perfil</h3>
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card" style="height: 355px">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center pt-3">
              <div class= "fotoPerfil rounded-circle" width="150">
                <span class ="iniciales">EE</span>
              </div>
              
              
              <div class="mt-3">
                <h4>{{ $user->name }} {{ $user->last_name }}</h4>

                <p class="text-muted font-size-sm">
                  Santa Ana, El Salvador
                </p>
                <button class="btn btn-purple1">Contactar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Nombre</h6>
              </div>
              <div class="col-sm-9 text-secondary">{{ $user->name }} {{ $user->last_name }}</div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">{{ $user->email }}</div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Teléfono</h6>
              </div>
              <div class="col-sm-9 text-secondary"> - </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Movil</h6>
              </div>
              <div class="col-sm-9 text-secondary"> - </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Dirección</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Santa Ana, El Salvador
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-purple1" data-bs-toggle="modal" data-bs-target="#edit-information-modal"
                  href="#">Editar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row gutters-sm">
      <div class="col-md-12">
        <div class="card mb-3 px-3">
          <div class="card-body">
            <div class="row py-3">
              <h5 class="text-center pb-2" style="font-weight: bold">
                Mis propiedades
              </h5>
              <br />
              <div class="col-md-3">
                <div class="card cardMercado">
                  <a href="{{ route('detalle-catalogo') }}">
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="./images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="./images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade1" role="button" data-bs-slide="next">
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
                  <a href="{{ route('detalle-catalogo') }}">
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="./images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="./images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade2" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade2" role="button"
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
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card cardMercado">
                  <a href="{{ route('detalle-catalogo') }}">
                    <div id="carouselExampleFade3" class="carousel slide carousel-fade">
                      <!-- Imágenes del carrusel -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/evento1.svg" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                          <img src="./images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                        </div>
                        <div class="carousel-item">
                          <img src="./images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 3" />
                        </div>
                      </div>

                      <!-- Controles del carrusel -->
                      <a class="carousel-control-prev" href="#carouselExampleFade3" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade3" role="button"
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
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <a href="{{ route('estate') }}" style="color: #fff; text-decoration: none">
                <button class="btn btn-purple1" style="width: 30%">
                  Ver mis propiedades
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL LOGIN -->
    <div class="modal fade" id="edit-information-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
              Editar información
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Nombre</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="{{ $user->name }} {{ $user->last_name }}">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="{{ $user->email }}">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Teléfono</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Movil</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Dirección</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="Santa Ana, El Salvador">
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <input type="button" class="btn btn-purple1 px-4" value="Guardar " style="width: 30%;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
