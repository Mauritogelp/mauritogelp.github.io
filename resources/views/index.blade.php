@extends('layouts.body')
@section('title', 'inicio')
@section('content')
<div class="row">
  <div class="col-sm-12 col-md-8">
    <div class="row first_info">
      <div class="card-group col-sm-12">
        <div class="row posts">
          <div class="card col-lg-4 col-md-12  card-post">
            <img class="card-img-top" src="{{ asset('storage/img/bg-example.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Diseño web</h5>
              <p class="card-text text-center">Maquetar un login con cualquier framework css</p>
              <p class="card-text text-center"><small class="text-muted">20/12/2020</small></p>
              <a href="#" data-toggle="modal" data-target="#report" class="btn btn-outline-danger"><i class="fas fa-flag"></i></a>
              <a href="{{ route('publicaciones.index') }}" class="btn btn-outline-dark float-right"><i class="fas fa-eye"></i></a>
              <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-danger" id="exampleModalLabel">Reportar usuario</i>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="container">
                      <form class="was-validated">
                        <div class="form-group">
                          <p>Señor/a <span class="text-muted">mauro</span> si el reporte no tiene nada que ver con el contenido de la publicación, quedará suspendido por tiempo indeterminado</p>
                          <select class="custom-select" required>
                            <option value="">Seleccione el motivo</option>
                            <option value="1">El contenido es demasiado confuzo</option>
                            <option value="2">Esto no tiene una relación con la programación</option>
                          </select>
                          <div class="invalid-feedback">Porfavor seleccione el motivo</div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-outline-danger">Denunciar</button>
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
  @include('components.ranking_moderator_teacher')
</div>
@endsection
@section('script')
@endsection