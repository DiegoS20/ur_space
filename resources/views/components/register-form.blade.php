<div class="py-3 text-center">
  <img src="{{ asset('images/black-logo.svg') }}" alt="" width="20%" />
</div>

<h5 class="text-black text-center">
  ¡Ur Space te da la bienvenida!
</h5>
<form action="{{ route('register') }}" method="POST" id="register-form">
  @csrf
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required />
    <label for="floatingInput">Nombre</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required />
    <label for="floatingInput">Apellido</label>
  </div>
  <div class="form-floating mb-3">
    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="FechaNacimiento" required />
    <label for="floatingInput">Fecha de Nacimiento</label>
  </div>

  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
    <label for="floatingInput">Correo Electrónico</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
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
  <button type="submit" class="btn btn-outline-dark w-100 btn-purple">
    ¡Comencemos!
  </button>
</form>
