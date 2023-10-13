@extends('templates.base', [
    'transparent' => true,
])

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  {{-- Owl carousel   --}}
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endsection

@section('content')
  {{-- Main banner   --}}
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-12 col-sm-auto d-flex justify-content-center align-content-center text-white text-center">
          <div>
            <img src="{{ asset('images/white-logo.svg') }}" alt="" width="25%" />
            <div class="py-5">
              <h1 class="">Bienvenido a Ur Space:</h1>
              <h1>Tu Lugar Ideal para Eventos</h1>
              <p class="">
                En Ur Space, hemos creado un espacio versátil y accesible
                para que puedas llevar a cabo tus eventos de manera
                excepcional.
                <br />
                Nuestra plataforma de gestión de terrenos te ofrece la
                oportunidad de encontrar y arrendar terrenos perfectos
                para tus necesidades, ya sea para celebrar bodas,
                conciertos, ferias, reuniones corporativas o cualquier
                otro evento especial.
              </p>

              <a href="{{ url('catalogo') }}"><button type="button" class="btn btn-outline-light">
                  Explora más
                </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Content --}}
  <div class="container">
    <div class="row justify-content-center align-content-center align-items-center pt-5">
      <h1 class="text-center pb-4">Conoce nuestros terrenos destacados</h1>
      <p class="text-center px-5 pb-5">
        Estos espacios han sido cuidadosamente elegidos por su belleza,
        versatilidad y ubicaciones únicas. Desde escenarios encantadores en
        medio de la naturaleza hasta espacios urbanos modernos, nuestros
        terrenos destacados ofrecen un lienzo perfecto para tu próximo
        evento especial. Ya sea una boda de ensueño, un evento corporativo o
        una celebración íntima, estos terrenos están diseñados para crear
        recuerdos inolvidables. Descubre nuestras opciones y encuentra el
        lugar perfecto para tu ocasión especial. ¡Explora y reserva hoy
        mismo!
      </p>
      <div class="owl-carousel owl-theme pt-3" style="width: 100%">
        <!-- 1 -->
        <div class="item">
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

        <!-- 2 -->
        <div class="item">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                <!-- Imágenes del carrusel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/evento2.svg" class="d-block w-100" alt="Imagen 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/evento2.1.svg" class="d-block w-100" alt="Imagen 2" />
                  </div>
                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next">
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

        <!-- 3 -->
        <div class="item">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                <!-- Imágenes del carrusel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/evento3.svg" class="d-block w-100" alt="Imagen 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/evento3.1.svg" class="d-block w-100" alt="Imagen 2" />
                  </div>
                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next">
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

        <!-- 4 -->
        <div class="item">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                <!-- Imágenes del carrusel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/evento4.svg" class="d-block w-100" alt="Imagen 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/evento1.1.svg" class="d-block w-100" alt="Imagen 2" />
                  </div>
                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next">
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

        <!-- 5 -->
        <div class="item">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="carousel4" class="carousel slide" data-bs-ride="carousel">
                <!-- Imágenes del carrusel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/evento1.svg" class="d-block w-100" alt="Imagen 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/evento1.1 (2).svg" class="d-block w-100" alt="Imagen 2" />
                  </div>
                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#carousel4" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel4" role="button" data-bs-slide="next">
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
        <!-- 6 -->
        <div class="item">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="carousel5" class="carousel slide" data-bs-ride="carousel">
                <!-- Imágenes del carrusel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/evento2.1.svg" class="d-block w-100" alt="Imagen 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/evento2.svg" class="d-block w-100" alt="Imagen 2" />
                  </div>
                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#carousel5" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel5" role="button" data-bs-slide="next">
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
        <!-- 7 -->
        <div class="item">
          <div class="card cardMercado">
            <a href="detalleProp.html">
              <div id="carousel6" class="carousel slide" data-bs-ride="carousel">
                <!-- Imágenes del carrusel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/evento3.1.svg" class="d-block w-100" alt="Imagen 1" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/evento3.svg" class="d-block w-100" alt="Imagen 2" />
                  </div>
                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#carousel6" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel6" role="button" data-bs-slide="next">
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

    <div class="row text-center py-5">
      <div class="col-md-12 col-sm-auto">
        <h1>¿Por qué elegir Ur Space?</h1>
      </div>
      <div class="col-md-12 text-center">
        <p>
          Ya sea que estés planeando un evento íntimo o un gran festival, Ur
          Space te brinda la solución perfecta para que tu evento sea un
          éxito. Explora nuestros terrenos hoy mismo y comienza a crear
          recuerdos inolvidables en espacios únicos.
        </p>
      </div>

      <div class="col-md-3 col-sm-auto py-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Variedad de Terrenos</h5>
            <p class="card-text">
              Explora una amplia gama de terrenos disponibles en diferentes
              ubicaciones y tamaños, cada uno listo para adaptarse a tu
              evento único.
            </p>
            <a href="catalogo.html" class="btn btn-outline-dark">Visita nuestro catálogo
              <i class="fas fa-solid fa-book-open-reader" style="color: #000000"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-auto py-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sencillez en la Reserva</h5>
            <p class="card-text">
              Nuestra plataforma intuitiva te permite encontrar, reservar y
              pagar por tu terreno en pocos pasos, todo en línea.
            </p>
            <a href="index.html" class="btn btn-outline-dark">Explora nuestro sistema
              <i class="fa-solid fa-bookmark" style="color: #000000"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-auto py-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Soporte Profesional</h5>
            <p class="card-text">
              Nuestro equipo está listo para ayudarte en cada etapa, desde
              la selección del terreno hasta la planificación y ejecución de
              tu evento.
            </p>
            <a href="soporte.html" class="btn btn-outline-dark">Atención al Cliente
              <i class="fa-solid fa-headset" style="color: #000000"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-auto py-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Seguridad y Confianza</h5>
            <p class="card-text">
              Trabajamos duro para garantizar que cada terreno esté en
              excelentes condiciones y cumpla con los estándares de
              seguridad.
            </p>
            <a href="soporte.html" class="btn btn-outline-dark">Políticas de privacidad
              <i class="fa-solid fa-key" style="color: #000000"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row align-content-center py-5">
      <div class="col-md-6 text-center align-content-center">
        <div class="d-flex align-items-center h-100">
          <h1>
            ¡Tu espacio, tu evento, tu experiencia! <br />Ur Space lo hace
            posible.
          </h1>
        </div>
      </div>
      <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./images/banner prueba.svg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="./images/2.svg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="./images/3.svg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/owl-carousel.min.js') }}"></script>
  <script>
    window.addEventListener('load', function() {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 4,
          },
          1000: {
            items: 4,
          },
        },
      })
    })
  </script>
@endsection
