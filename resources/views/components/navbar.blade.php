<style>
  #navbar {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }

  #navbar.scrolled {
    background-color: #000;
  }

  .btn-purple {
    background-color: #8307bd;
    border-color: #8307bd;
    color: #fff;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .btn-purple:hover {
    background-color: #fff;
    color: #000;
  }
</style>
<nav class="navbar navbar-expand-lg fixed-top text-white {{ $black ? 'scrolled' : '' }}" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand px-4" href="/">
      <img src="{{ asset('images/white-logo.svg') }}" alt="Bootstrap" width="80" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-3">
          <a class="nav-link active text-white" aria-current="page" href="catalogo.html">
            Navegar</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link active text-white" aria-current="page" href="#">Acerca de</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Mueve estos botones al final usando "ml-auto" -->
        <li class="nav-item px-3">
          <button type="button text-white" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#Login">
            Iniciar Sesión
          </button>
        </li>
        <li class="nav-item px-3">
          <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#Register">
            ¡Regístrate!
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- LOGIN MODAL --}}
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
          Inicia Sesión o Regístrate
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div class="py-3">
          <img src="{{ asset('images/black-logo.svg') }}" alt="" width="20%" />
        </div>

        <h5 class="text-black">¡Ur Space te da la bienvenida!</h5>
        <div class="py-4">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
            <label for="floatingInput">Correo Electrónico</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
            <label for="floatingPassword">Contraseña</label>
          </div>

          <p class="tienescuenta py-3">
            ¿Aún no te has registrado?<a href=""> Regístrate acá</a>
          </p>

          <a href="catalogo.html">
            <button type="button" class="btn btn-purple btn-outline-dark w-100">
              ¡Comencemos!
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- SIGN UP MODAL --}}
<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">
          Regístrate
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="py-3 text-center">
          <img src="{{ asset('images/black-logo.svg') }}" alt="" width="20%" />
        </div>

        <h5 class="text-black text-center">
          ¡Ur Space te da la bienvenida!
        </h5>
        <div class="">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" />
            <label for="floatingInput">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Apellido" />
            <label for="floatingInput">Apellido</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" placeholder="FechaNacimiento" />
            <label for="floatingInput">Fecha de Nacimiento</label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
            <label for="floatingInput">Correo Electrónico</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
            <label for="floatingPassword">Contraseña</label>
          </div>

          <div class="col-12 py-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
              <label class="form-check-label small" for="invalidCheck">
                Al registrarme, acepto los Términos del servicio, los
                Términos de pagos, y la Política de privacidad de Ur
                Space.
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>

          <p class="tienescuenta py-2 text-center small">
            ¿Ya tienes cuenta?<a href="Login"> Inicia Sesión</a>
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <a href="catalogo.html">
          <button type="button" class="btn btn-outline-dark w-100 btn-purple">
            ¡Comencemos!
          </button>
        </a>
      </div>
    </div>
  </div>
</div>

@if (!$black)
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const navbar = document.getElementById("navbar");
      window.addEventListener("scroll", () => {
        navbar.classList.toggle("scrolled", window.scrollY >= 100);
      });
    });
  </script>
@endif

