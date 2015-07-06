@extends('layouts.sitio')

@section('title', 'PSG')

@section('content')
<div class="row">
  <div class="col-sm-8 col-md-4 col-md-offset-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Iniciar Sesion</h3>
      </div>
      <div class="panel-body">
        <form method="POST" action="/auth/login">
          {!! csrf_field() !!}
          <div>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Correo Electronico">
          </div>
          <div>
            <input type="password" name="password" class="form-control" placeholder="Contraseña" id="password">
          </div>
          <div>

          </div>
          <div>
            <button type="submit" class="btn btn-success btn-block">Acceder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
