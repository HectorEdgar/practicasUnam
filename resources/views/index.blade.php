@extends('layouts.admin')
@section('titulo')
    Index
@endsection
@section('contenido')
    <h3>Bienvenido : </h3>
<div class="row">
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header text-center">Catalogo</div>
      <div class="card-body">
        <h5 class="card-title">Autor</h5>
        <p class="card-text">Entra al catálogo de la tabla Autor</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/autor" class="btn btn-outline-secondary  text-white container-fluid">Vamos</a></small>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header text-center">Catalogo</div>
      <div class="card-body">
        <h5 class="card-title">Tema</h5>
        <p class="card-text">Entra al catálogo de la tabla Tema</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/tema" class="btn btn-outline-secondary  text-white container-fluid">Vamos</a></small>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header text-center">Catalogo</div>
      <div class="card-body">
        <h5 class="card-title">Eje</h5>
        <p class="card-text">Entra al catálogo de la tabla Eje</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/eje" class="btn btn-outline-secondary  text-white container-fluid">Vamos</a></small>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header text-center">Catalogo</div>
      <div class="card-body">
        <h5 class="card-title">Editor</h5>
        <p class="card-text">Entra al catálogo de la tabla Editor</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/editor" class="btn btn-outline-secondary  text-white container-fluid">Vamos</a></small>
      </div>
    </div>
  </div>


  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header text-center">Catalogo</div>
      <div class="card-body">
        <h5 class="card-title">Paises</h5>
        <p class="card-text">Entra al catálogo de la tabla Paises</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/paises" class="btn btn-outline-secondary  text-white container-fluid">Vamos</a></small>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header text-center">Catalogo</div>
        <div class="card-body">
          <h5 class="card-title">Institución</h5>
          <p class="card-text">Entra al catálogo de la tabla Institución</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="/institucion" class="btn btn-outline-secondary  text-white container-fluid">Vamos</a></small>
        </div>
      </div>
    </div>
</div>

@endsection
