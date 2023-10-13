@if (isset($onPage) && $onPage)
  <style>
    .login-container {
      margin-top: 7%;
      width: 27%;
    }

    .logo-container {
      display: flex;
      justify-content: center;
    }
  </style>
@endif
<div class="container login-container">
  <div class="py-3 logo-container">
    <img src="{{ asset('images/black-logo.svg') }}" alt="" width="20%" />
  </div>

  <h5 class="text-black text-center">¡Ur Space te da la bienvenida!</h5>
  <div class="py-4">
    <form action="{{ route('login') }}" method="post">
      @csrf
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" />
        <label for="floatingInput">Correo Electrónico</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
        <label for="floatingPassword">Contraseña</label>
      </div>

      <p class="tienescuenta py-3">
        ¿Aún no te has registrado?<a href=""> Regístrate acá</a>
      </p>

      <button type="submit" class="btn btn-purple btn-outline-dark w-100">
        ¡Comencemos!
      </button>
    </form>
  </div>
</div>

