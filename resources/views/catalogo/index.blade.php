@extends('templates.base')

@section('styles')
  <style>
    .bannerCAT {
      background-color: #8307bd;
      height: 10%;
    }

    .container {
      margin-top: 80px;
    }

    .imgfondo {
      background-image: url("/images/banner-catalogo.svg");
      background-size: cover;
    }

    .btn-naranja {
      background-color: #ebaf1f;
      border-color: #ebaf1f;
      color: #fff;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
  </style>
@endsection

@section('content')
  <div class="bannerCAT">
    <div class="container">
      <div class="row d-flex py-3 justify-content-center text-white small align-content-center align-items-center">
        <div class="col-md-2 col-sm-auto text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fa-solid fa-ring"
              style="color: #ffffff"></i> Bodas
          </a>
        </div>
        <div class="col-md-2 col-sm-auto text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-graduation-cap"
              style="color: #ffffff"></i>
            Graduaciones</a>
        </div>
        <div class="col-md-2 col-sm-auto text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-music"
              style="color: #ffffff"></i>
            Conciertos</a>
        </div>
        <div class="col-md-2 col-sm-auto text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-palette"
              style="color: #ffffff"></i>
            Exposiciones</a>
        </div>

        <div class="col-md-2 col-sm-auto text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fa-solid fa-cake-candles"
              style="color: #ffffff"></i>
            Cumpleaños</a>
        </div>
        <div class="col-md-2 col-sm-auto text-center text-white">
          <button class="btn btn-naranja" id="abrirModal" data-bs-toggle="modal" data-bs-target="#Filtro">
            <i class="fa-solid fa-filter" style="color: #ffffff"></i>
            Filtrar
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="imgfondo img-fluid">
    <div class="pt-5">
      <div class="row py-5">
        <div class="d-flex justify-content-center py-5">
          <div class="card" style="width: 50%">
            <div class="card-body py-4 px-5">
              <div class="text-center py-2">
                <h1>San Salvador, El Salvador</h1>
              </div>

              <div class="row">
                <div class="col-md-4 col-sm-auto">
                  <div class="form">
                    <input type="date" class="form-control" />
                  </div>
                </div>
                <div class="col-md-8 col-sm-auto">
                  <form class="d-flex mb-3 pe-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar Ahora" aria-label="Search" />
                    <button class="btn btn-outline-success btn-purple" type="submit">
                      Búsqueda
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="row d-flex pb-5">
      <div class="col-md-3">
        <div class="card cardMercado">
          <a href="{{ route('detalle-catalogo') }}">
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
          <a href="{{ route('detalle-catalogo') }}">
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
    <div class="row d-flex pb-5">
      <div class="col-md-3">
        <div class="card cardMercado">
          <a href="{{ route('detalle-catalogo') }}">
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
            <div id="myCarousel" class="carousel slide">
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
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
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
    <div class="row">
      <div class="col-md-12 col-sm-auto">
        <nav aria-label="Page navigation example">
          <ul class="pagination  pagination-md justify-content-center">
            <li class="page-item">
              <a class="page-link text-center" style="background-color: #000; color:white;" href="#"
                aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link " style="color: black;" href="#">1</a></li>
            <li class="page-item"><a class="page-link" style="color: black;" href="#">2</a></li>
            <li class="page-item"><a class="page-link" style="color: black;" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" style="background-color: #000; color:white;" href="#"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="modal fade" id="Filtro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">

          <p class="modal-title text-center text-small text-dark" id="exampleModalLabel">Filtros</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="px-5 py-4">
              <label for="customRange1" class="form-label"><b>Rango de precios</b></label>
              <input type="range" class="form-range" id="customRange1" />

              <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-5">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="$" />
                    <label for="floatingInput">Mínimo</label>
                  </div>
                </div>
                <div class="col-md-2 text-center">
                  <p>
                    <i class="fa-thin fas fa-minus fa-2xl" style="color: #949ea4"></i>
                  </p>
                </div>
                <div class="col-md-5">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Máximo" />
                    <label for="floatingInput">Máximo</label>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row d-flex justify-content-center pt-3">
                <p>
                  <b>Tipo de propiedad en la que se encuentra el terreno</b>
                </p>

                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="filtroCasa" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-house fa-2xl" style="color: #000000"></i>
                      </p>
                      <p class="pt-2">Casa</p>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="filtroHotel" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-hotel fa-2xl" style="color: #000000"></i>
                      </p>
                      <p class="pt-2">Hotel</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="filtroPlaya" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-umbrella-beach fa-2xl" style="color: #000000"></i>
                      </p>
                      <p class="pt-2">Playa</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="filtroBosque" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-tree fa-2xl" style="color: #000000"></i>
                      </p>
                      <p class="pt-2">Bosque</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-center pt-3">
                <p><b>Cantidad de personas a asistir</b></p>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="cant50" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-people-group fa-lg" style="color: #000000;"></i>
                      </p>
                      <p>50 personas</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="cant100" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-people-group fa-lg" style="color: #000000;"></i>
                      </p>
                      <p>100 personas</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="cant500" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-people-group fa-lg" style="color: #000000;"></i>
                      </p>
                      <p>500 personas</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 px-2">
                  <div class="card mb-3 btn" id="cantmas500" style="max-width: 18rem">
                    <div class="card-body">
                      <p>
                        <i class="fa-solid fa-people-group fa-lg" style="color: #000000;"></i>
                      </p>
                      <p class="text-justify">+500</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-center pt-3 align-content-center align-items-center">
                <p><b>Estilo de la Propiedad</b></p>
                <div class="col-md-4 col-sm-auto">
                  <div class="">
                    <div class="form-check py-2">
                      <input class="form-check-input" type="checkbox" value="" id="moderno">
                      <label class="form-check-label" for="moderno">
                        Moderno
                      </label>
                    </div>
                    <div class="form-check py-2">
                      <input class="form-check-input" type="checkbox" value="" id="lujoso">
                      <label class="form-check-label" for="lujoso">
                        Lujuso
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-auto">
                  <div class="">
                    <div class="form-check py-2">
                      <input class="form-check-input" type="checkbox" value="" id="romantico">
                      <label class="form-check-label" for="romantico">
                        Romántico
                      </label>
                    </div>
                    <div class="form-check py-2">
                      <input class="form-check-input" type="checkbox" value="" id="sencillo">
                      <label class="form-check-label" for="sencillo">
                        Sencillo
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-auto">
                  <div class="">
                    <div class="form-check py-2">
                      <input class="form-check-input" type="checkbox" value="" id="ff">
                      <label class="form-check-label" for="ff">
                        Family Friendly
                      </label>
                    </div>
                    <div class="form-check py-2">
                      <input class="form-check-input" type="checkbox" value="" id="divertidos">
                      <label class="form-check-label" for="divertidos">
                        Divertidos
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark">Quitar Filtros</button>
            <button class="btn btn-naranja text-center" id="abrirModal">
              <i class="fa-solid fa-filter" style="color: #ffffff"></i>
              Mostrar Propiedades
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
