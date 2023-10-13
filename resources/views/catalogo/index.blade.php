@extends('templates.base', ['black' => true])

@section('styles')
  <style>
    .bannerCAT {
      background-color: #8307bd;
      height: 10%;
    }

    .container {
      margin-top: 5%;
      /* background-color: #EEEEEE; */
    }
  </style>
@endsection

@section('content')
  <div class="bannerCAT">
    <div class="container">
      <div class="row d-flex py-3 justify-content-center text-white small">
        <div class="col-2 text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fa-solid fa-ring"
              style="color: #ffffff"></i> Bodas
          </a>
        </div>
        <div class="col-2 text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-graduation-cap"
              style="color: #ffffff"></i>
            Graduaciones</a>
        </div>
        <div class="col-2 text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-music"
              style="color: #ffffff"></i>
            Conciertos</a>
        </div>
        <div class="col-2 text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-palette"
              style="color: #ffffff"></i>
            Exposiciones</a>
        </div>
        <div class="col-2 text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fas fa-regular fa-champagne-glasses"
              style="color: #ffffff"></i>
            Eventos Privados</a>
        </div>
        <div class="col-2 text-center">
          <a href="" style="text-decoration: none; color: #ffffff"><i class="fa-solid fa-cake-candles"
              style="color: #ffffff"></i>
            Cumpleaños</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row py-5">
      <div class="col-md-12 col-sm-auto">
        <h3 class="text-center"><b>Catálogo de Propiedades</b></h3>
        <div class="px-5 text-center">
          <p>
            Ya sea que estés planeando una boda, un concierto, una feria,
            una reunión corporativa o cualquier otro tipo de evento,
            nuestros terrenos ofrecen una variedad de opciones para que
            puedas encontrar el espacio ideal que se ajuste a tus
            necesidades y visión. Te invitamos a explorar nuestro
            catálogo, conocer más sobre cada terreno y comenzar la
            emocionante búsqueda del lugar perfecto para tu próximo
            evento. Gracias por confiar en nosotros como tu socio en la
            planificación de eventos inolvidables.
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="row d-flex pb-5">
        <div class="col-md-3">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <a href="detalleProp.html">
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link text-center" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
