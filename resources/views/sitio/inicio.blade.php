@extends('layouts.sitio')

@section('title', 'PSG')

@section('content')
<!-- Carrucel -->
<div class="col-md-6">
  <div class="jumbotron">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item"><img src="img/slider1.jpg"></div>
        <div class="item active"><img src="img/slider2.jpg"></div>
        <div class="item"><img src="img/slider3.jpg"></div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
</div>
<!-- /Carrucel -->

<!-- Modal -->
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Iniciar Sesion</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <label>Nombre de Usuario</label>
            <input type="text" class="form-control" placeholder="Name">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Email">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Iniciar</button>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->
@endsection
