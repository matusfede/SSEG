@extends('layouts.sitio')

@section('title', 'PSG')

@section('content')
<div class="row section">
    <div class="col-md-1">
        <label class="lead">Registro</label> 
    </div>
    <div class="col-md-11">
        <hr>
    </div>
</div>
<div class="section text-center">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <div class="col-md-4 col-md-offset-4">
            <input type="text" name ="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
        </div>
        <div class="col-md-4 col-md-offset-4">
            <input type="email" name ="email" class="form-control" placeholder="Correo Electronico" value="{{ old('email') }}">
        </div>
        <div class="col-md-4 col-md-offset-4">
            <input type="password" name ="password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="col-md-4 col-md-offset-4">
            <input type="password" name ="password_confirmation" class="form-control" placeholder="Confirmar">
        </div>
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-block">Registrase</button>
        </div>
    </form>
</div>
<div class="section col-md-12"><hr></div>
@endsection
