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
          <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Tus reservas </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
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
              <a class = "btn" data-bs-toggle="modal" data-bs-target="#AgregarProp"><i class="fa-solid fa-plus fa-xl"
                  style="color: #8307bd;"></i></a>
            </p>

            <!-- MODAL AGREGAR PROPIEDAD -->
            <div class="modal fade" id="AgregarProp" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
                      Agregar Propiedad
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <!-- Nombre de Propiedad -->
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Propiedad" />
                        <label for="floatingInput">Nombre de la Propiedad</label>
                      </div>
                      <!--Finaliza Nombre de Propiedad -->

                      <!-- Ubicación de Propiedad -->
                      <div class="row g-3 mb-4">
                        <div class="col">
                          <label for="Pais" class="form-label">País</label>
                          <input type="text" class="form-control" id="Pais" placeholder=""
                            aria-label="First name" />
                        </div>
                        <div class="col">
                          <label for="Ciudad" class="form-label">Ciudad</label>
                          <input type="text" class="form-control" id="Ciudad" placeholder=""
                            aria-label="Last name" />
                        </div>
                      </div>

                      <div class="mb-4">
                        <label for="direccion" class="form-label">Dirección de la Propiedad</label>
                        <input type="email" class="form-control" id="direccion" placeholder="" />
                      </div>
                      <!-- Finaliza Ubicación de Propiedad -->


                      <!-- Descripción de Link de MAPS -->
                      <div class="row mb-4">
                        <div class="">
                          <label for="exampleFormControlTextarea1" class="form-label">Localización en Mapa</label>
                          <input type="text" class="form-control" id="mapa" placeholder="" />
                        </div>
                      </div>
                      <!-- Finaliza Descripción de Propiedad -->

                      <!-- Descripción de Propiedad -->
                      <div class="row mb-4">
                        <div class="">
                          <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </div>
                      <!-- Finaliza Descripción de Propiedad -->

                      <!-- Precio y Capacidad de Propiedad -->
                      <div class="row mb-4">
                        <div class="col-md-6">
                          <label for="dinero" class="form-label">Precio de Propiedad</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-money-bill"
                                style="color: #8307bd"></i></span>
                            <input type="text" class="form-control" id="dinero"
                              aria-label="Amount (to the nearest dollar)" />
                          </div>
                        </div>

                        <div class="col-md-6">
                          <label for="dinero" class="form-label">Capacidad de Propiedad</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-person"
                                style="color: #8307bd"></i></span>
                            <input type="text" class="form-control" id="dinero"
                              aria-label="Amount (to the nearest dollar)" />
                          </div>
                        </div>
                      </div>
                      <!-- Finaliza Precio y Capacidad de Propiedad -->

                      <!-- Categoria General de Propiedad -->
                      <label for="" class="form-label">Categorias</label>
                      <div class="row mb-4 text-center">
                        <div class="col-md-4 col-sm-auto">
                          <div class="">
                            <div class="form-check py-2">
                              <input class="form-check-input" type="checkbox" value="" id="catModerno" />
                              <label class="form-check-label" for="flexCheckDefault">
                                Moderno
                              </label>
                            </div>
                            <div class="form-check py-2">
                              <input class="form-check-input" type="checkbox" value="" id="catLujoso" />
                              <label class="form-check-label" for="flexCheckDefault">
                                Lujuso
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-auto">
                          <div class="">
                            <div class="form-check py-2">
                              <input class="form-check-input" type="checkbox" value="" id="catRomantico" />
                              <label class="form-check-label" for="flexCheckDefault">
                                Romántico
                              </label>
                            </div>
                            <div class="form-check py-2">
                              <input class="form-check-input" type="checkbox" value="" id="catSencillo" />
                              <label class="form-check-label" for="flexCheckDefault">
                                Sencillo
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-auto">
                          <div class="">
                            <div class="form-check py-2">
                              <input class="form-check-input" type="checkbox" value="" id="catFF" />
                              <label class="form-check-label" for="flexCheckDefault">
                                Family Friendly
                              </label>
                            </div>
                            <div class="form-check py-2">
                              <input class="form-check-input" type="checkbox" value="" id="catDivertido" />
                              <label class="form-check-label" for="flexCheckDefault">
                                Divertidos
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Finaliza Categoría General e Propiedad -->

                      <!-- Categoria por Ubicación -->
                      <label for="" class="form-label">Categorias por Ubicación</label>
                      <div class="row mb-4 d-flex">

                        <!-- Casa -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="casacheck" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fa-solid fa-house" style="color: #000000"></i> Casa
                            </label>
                          </div>
                        </div>

                        <!-- Hotel -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="hotelcheck" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fa-solid fa-hotel" style="color: #000000"></i> Hotel
                            </label>
                          </div>
                        </div>

                        <!-- Playa -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="playacheck" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fa-solid fa-umbrella-beach" style="color: #000000"></i> Playa
                            </label>
                          </div>
                        </div>

                        <!-- Bosque -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="bosquecheck" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fa-solid fa-tree" style="color: #000000"></i> Bosque
                            </label>
                          </div>
                        </div>

                      </div>
                      <!-- Finaliza Categoría según Ubicación de Propiedad -->

                      <!-- Categoria por Celebración -->
                      <label for="" class="form-label">Categorias por Celebración</label>
                      <div class="row mb-4 d-flex">

                        <!-- Casa -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="boda" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fa-solid fa-ring" style="color: black"></i> Bodas
                            </label>
                          </div>
                        </div>

                        <!-- Hotel -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="grad" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fas fa-regular fa-graduation-cap" style="color: black"></i> Graduaciones
                            </label>
                          </div>
                        </div>

                        <!-- Playa -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="concierto" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fas fa-regular fa-music" style="color: black"></i> Conciertos
                            </label>
                          </div>
                        </div>

                        <!-- Bosque -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="expo" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fas fa-regular fa-palette" style="color: black"></i>Exposiciones
                            </label>
                          </div>
                        </div>

                        <!-- Bosque -->
                        <div class="col-md-3 col-sm-auto">
                          <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="" id="cumple" />
                            <label class="form-check-label" for="flexCheckDefault">
                              <i class="fa-solid fa-cake-candles" style="color: black"></i> Cumpleaños
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- Finaliza Categoría según Celebración de Propiedad -->

                      <!-- Fotos de Propiedad -->
                      <div class="row mb-4">
                        <label for="" class="form-label">Agregar Fotografías de Propiedad</label>
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="inputGroupFile01"><i class="fa-solid fa-image"
                              style="color: #8307bd;"></i></label>
                          <input type="file" class="form-control" id="inputGroupFile01" multiple>
                        </div>
                      </div>
                      <!-- Termina Fotos de Propiedad -->

                      <!-- Boton -->
                      <button type="button" class="btn btn-purple btn-outline-dark w-100 mt-2">
                        <b>Agregar Propiedad</b>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
                          <a class="btn1 btn" id= "alerta">Borrar</a>
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
                          <a class="btn1 btn" id= "alerta">Borrar</a>
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
                          <a class="btn1 btn" id= "alerta">Borrar</a>
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
                          <a class="btn1 btn" id= "alerta">Borrar</a>
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
                <div class="text-secondary">
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
                  <input type="button" class="btn btn1 btn-purple1 px-4" value="Guardar " style="width: 30%" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
  document.getElementById('alerta').addEventListener('click', function(){
    Swal.fire({
    title: "¿Estás seguro?",
    text: "¡No podrás revertir esto!",
    icon: "warning",
    showCancelButton: true,
    cancelButtonText: "Cancelar",
    confirmButtonColor: "#8307bd",
    cancelButtonColor: "#000",
    confirmButtonText: "¡Si, borralo!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Eliminado!",
          text: "Tu propiedad ha sido eliminada.",
          icon: "success",
          confirmButtonColor: "#8307bd"
        });
      }
    });
  })
</script>
@endsection

