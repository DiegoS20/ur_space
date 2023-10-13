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
<nav class="navbar navbar-expand-lg fixed-top text-white {{ $transparent ? '' : 'scrolled' }}" id="navbar">
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

@if (!$isUserLoggedIn)
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
          <x-login-form />
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
          <x-register-form />
        </div>
      </div>
    </div>
  </div>
@endif

@if ($transparent)
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const navbar = document.getElementById("navbar");
      window.addEventListener("scroll", () => {
        navbar.classList.toggle("scrolled", window.scrollY >= 100);
      });
    });
  </script>
@endif

