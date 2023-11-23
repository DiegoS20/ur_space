@extends('templates.base')

@section('styles')
  <style>
    .btn-purple1 {
      background-color: #8307BD;
      border-color: #8307BD;
      color: #fff;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-purple1:hover {
      background-color: #a04ec5;
      color: white;
    }
  </style>
@endsection

@section('content')
  <div class="container py-5" style="margin-top: 5%">
    <div class="row">
      <div class="col-md-8 justify-content-center">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="row">
              <img class="pb-3" src="/images/gallery1.png" alt="" />
              <img class="pb-2" src="/images/banner-catalogo.svg" alt="" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <img class="pb-2" src="/images/collage1.png" alt="" height="300px" />
              <img class="pb-2" src="/images/collage2.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pb-5">
          <h1><b>Playita Terreno</b></h1>
          <span class="badge text-bg" style="background-color: #8307bd">Bodas</span>
          <span class="badge text-bg" style="background-color: #8307bd">El Salvador</span>
          <span class="badge text-bg" style="background-color: #8307bd">Moderno</span>
        </div>
        <p>
          <b>
            <i class="fa-solid fa-location-crosshairs fa-lg" style="color: #000000"></i>
            Ubicacion: </b>San Salvador, El Salvador
        </p>
        <p>
          <b><i class="fa-solid fa-money-bill" style="color: #000000"></i>
            Precio: </b>$1500.00
        </p>
        <p>
          <b>
            <i class="fa-solid fa-user fa-lg" style="color: #000000;"></i> Dueño:
          </b> Juanito Escobar
        </p>

        <div class="py-3">
          <p>
            Bienvenidos a nuestro espectacular terreno para eventos en la
            playa, un lugar paradisíaco donde tus sueños de celebrar un
            evento inolvidable junto al mar se hacen realidad. Situado en
            la pintoresca costa, este espacio ofrece la combinación
            perfecta de arena dorada, aguas cristalinas y un entorno
            natural impresionante.
          </p>
          <p><i class="fas fa-solid fa-star" style="color: #8307bd"></i>
            Valoración: 4.9 (602)</p>
          <button type="button" class="btn btn-purple btn-outline-dark w-100 my-5" data-bs-toggle="modal"
            data-bs-target="#Reserva">
            <b>¡Reserva ahora!</b>
          </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-auto">
        <p><b>Reseñas y Valoraciones (602)</b></p>
        <div class="row d-flex">
          <div class="col-md-4">
            <div class="d-flex align-items-center">
              <i class="fa-solid fa-ranking-star fa-2xl" style="color: #8307bd;"></i>
              <h1 class="px-3">
                4.9
              </h1>
            </div>
          </div>
          <div class="col-md-8">

          </div>

        </div>
        <hr>
        <div class="row">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-10">
              <div class="form-floating mb-3 ">
                <input type="text" class="form-control" id="floatingInput" placeholder="valoracion">
                <label for="floatingInput"> Ingresar reseña</label>
              </div>
            </div>
            <div class="col-md-2">
              <a href="#"><i class="fa-solid fa-paper-plane fa-2xl" style="color: #8307bd;"></i></a>
            </div>

          </div>

          <div class="col-md-6 px-5">
            <div class="py-3">
              <div class="card">
                <div class="card-body">
                  <div class="row d-flex justify-content-start">
                    <div class="col-md-1">
                      <i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i>
                    </div>
                    <div class="col-md-8 text-start">
                      <p class="small">Usuario 1</p>
                      <p>Buen lugar, tiene unas instalaciones hermosas para llevar a cabo diversos eventos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3">
              <div class="card">
                <div class="card-body">
                  <div class="row d-flex justify-content-start">
                    <div class="col-md-1">
                      <i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i>
                    </div>
                    <div class="col-md-8 text-start">
                      <p class="small">Usuario 1</p>
                      <p>Buen lugar, tiene unas instalaciones hermosas para llevar a cabo diversos eventos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6 px-5">
            <div class="py-3">
              <div class="card">
                <div class="card-body">
                  <div class="row d-flex justify-content-start">
                    <div class="col-md-1">
                      <i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i>
                    </div>
                    <div class="col-md-8 text-start">
                      <p class="small">Usuario 1</p>
                      <p>Buen lugar, tiene unas instalaciones hermosas para llevar a cabo diversos eventos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3">
              <div class="card">
                <div class="card-body">
                  <div class="row d-flex justify-content-start">
                    <div class="col-md-1">
                      <i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i>
                    </div>
                    <div class="col-md-8 text-start">
                      <p class="small">Usuario 1</p>
                      <p>Buen lugar, tiene unas instalaciones hermosas para llevar a cabo diversos eventos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- MODAL RESERVA -->
  <div>
    <div class="modal fade" id="Reserva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
              Reservar
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
                  <input type="text" class="form-control" value="Alejandra Reyes">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="email" class="form-control" value="al@domain.com">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Teléfono</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(239) 816-9029">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Movil</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(320) 380-4539">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Fecha</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="date" class="form-control" id="fechaInput" placeholder="dd/mm/yyyy">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Hora de inicio estimada</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="time" class="form-control" id="fechaInput" placeholder="00:00">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12 text-secondary">
                  <p><i class="fas fa-solid fa-triangle-exclamation" style="color: #808389;"></i> Las horas de reserva o
                    la duración del evento deberán discutirse con el propietario</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                    <label class="form-check-label small text-secondary" for="invalidCheck">
                      Al reservar, acepto los Términos del servicio y la Política de privacidad de Ur
                      Space.
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
              </div>
              <div class="row d-flex justify-content-center">
                <input type="button" class="btn btn-purple1 px-4" value="Reservar " style="width: 30%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
