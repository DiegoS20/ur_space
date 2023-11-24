@extends('templates.base')

@section('styles')
  <link rel="stylesheet" href="{{ mix('css/support.css') }}">
@endsection

@section('content')
  <div class=" search container-fluid">
    <div class="mb-3"></div>
    <h1>¿Como podemos ayudarte?</h1></br>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Escribenos" aria-label="Example text with button addon"
        aria-describedby="button-addon1" />
      <button class="btn1 btn" type="button" id="button-addon1">
        Buscar
      </button>
    </div>
  </div>
  </div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-md-6">
      <h3><b>Preguntas frecuentes</b></h3>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                  ¿Cómo puedo reservar un terreno para mi fiesta?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Puedes reservar un terreno a través de nuestro sitio web, completando el formulario de reserva en línea
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                  ¿Cuáles son las capacidades y dimensiones de los terrenos disponibles?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                  Ofrecemos terrenos de diferentes tamaños para adaptarse a diversas capacidades. 
                  Puedes encontrar detalles específicos sobre dimensiones y capacidades en la página de cada propiedad.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                  ¿Hay restricciones de horario para las fiestas?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                  Hay ciertas restricciones de horario que se detallan al comunicarse con el propietario. Asegúrate de revisar estos detalles al planificar tu evento.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                  ¿Cómo puedo agregar mi propiedad para su alquiler
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    -Inicia sesión en tu cuenta o regístrate si eres nuevo en nuestra plataforma.<br>
                    -Ve al panel de modo propietario y luego ve a la sección de "Agregar Propiedad".<br>
                    -Completa la información requerida, incluyendo detalles sobre la ubicación, capacidad y tarifas.<br>
                    -Sube imágenes atractivas que muestren tu propiedad de la mejor manera posible.<br>
                    -Revisa y confirma la información antes de publicar tu propiedad.<br>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-6">
      <h3><b>Escríbenos</b></h3>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >¿Cómo te llamas?</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Nombre/usuario"
            />
          </div>

          <div class="select mb-3">
            <select class="form-select" aria-label="Default select example">
              <option value="1">Preguntas</option>
              <option value="2">Sugerencias</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
              >Escríbenos</label
            >
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
            <br>
            <button type="button" class="btn btn-outline-dark px-5">Enviar</button>
          </div>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6">
      <h3><b>Sugerencias</b></h3>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefive"
                  aria-expanded="true"
                  aria-controls="collapsefive"
                >
                Explora Diversas Ubicaciones
                </button>
              </h2>
              <div
                id="collapsefive"
                class="accordion-collapse collapse show"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                No te limites a una sola ubicación. Explora diferentes terrenos en diversas áreas para encontrar el lugar perfecto que se adapte a tus necesidades y preferencias.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsesix"
                  aria-expanded="false"
                  aria-controls="collapsesix"
                >
                Lee Reseñas y Calificaciones
                </button>
              </h2>
              <div
                id="collapsesix"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                Antes de tomar una decisión, revisa las reseñas y calificaciones de otros usuarios que hayan reservado la propiedad. 
                Esto te brindará información valiosa sobre la experiencia de otros clientes y te ayudará a tomar una decisión informada 
                sobre si el terreno cumple con tus expectativas.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseseven"
                  aria-expanded="false"
                  aria-controls="collapseseven"
                >
                Reserva con Anticipación
                </button>
              </h2>
              <div
                id="collapseseven"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                Para garantizar la disponibilidad del terreno que te interesa, realiza tu reserva con la mayor antelación posible. 
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsenine"
                  aria-expanded="false"
                  aria-controls="collapsenine"
                >
                  Colocar más apartados
                </button>
              </h2>
              <div
                id="collapsenine"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Aparte de estaciones tomas en cuenta más días festivos.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
        <div class="mapa">
            <h3><b>Nuestra ubicación</b></h3>
            <br>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.6010935205095!2d-89.55025295962676!3d13.982333691969156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62e62036825a69%3A0xec68b49f92513893!2sUNICAES%20Santa%20Ana!5e0!3m2!1ses!2ssv!4v1700605413962!5m2!1ses!2ssv"
              width="100%"
              height="300px"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

        </div>
    </div>
  </div>

  <div class="onlhelp text-end">
    <button class="btn"><i class="fa-solid fa-headset fa-2xl" style="color: #8307bd;"></i></button>
  </div>
@endsection
