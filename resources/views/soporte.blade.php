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

  <div class="cards">
    <h2>Preguntras frecuentes</h2></br>
    <div class="card-group">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="fa-solid fa-user" style="color: #8307bd;"></i> Sam</h5>
          <p class="card-text">
            ¿Como puedo realizar una resrva?
          </p>
          <p class="card-text">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
      <div class="card">

        <div class="card-body">
          <h5 class="card-title"><i class="fa-solid fa-user" style="color: #8307bd;"></i> Cristal</h5>
          <p class="card-text">
            ¿Como puedo descargar mi recibo?
          </p>
          <p class="card-text">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
      <div class="card">

        <div class="card-body">
          <h5 class="card-title"><i class="fa-solid fa-user" style="color: #8307bd;"></i> Joseph</h5>
          <p class="card-text">
            Deje mi telefono en el hotel, ¿podrian guardarmelo?
          </p>
          <p class="card-text">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="onlhelp text-end">
    <button class="btn"><i class="fa-solid fa-headset fa-2xl" style="color: #8307bd;"></i></button>
  </div>
@endsection
