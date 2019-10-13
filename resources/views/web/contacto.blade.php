@extends('web.layouts.app')

@section('main-content')
<div class="container">
  <div class="posts col-md-8 col-md-offset-2">
    @if (session()->has('success'))
      <div class="alert alert-success">
        {!! session()->get('success') !!}
      </div>
    @endif
    <form action="{{ route('admin.mensajes.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="apellido_y_nombres">Apellido y Nombres</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellido_y_nombres" placeholder="Ingrese su nombre completo">
        <small id="emailHelp" class="form-text text-muted" hidden>We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Correo electrónico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Ingrese su correo electrónico">
        <small id="emailHelp" class="form-text text-muted" hidden>We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Asunto</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="asunto" placeholder="Ingrese el asunto">
        <small id="emailHelp" class="form-text text-muted" hidden>We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="mensaje"></textarea>
      </div>
      @include('web.partials.captcha')
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

  </div>
</div>
@endsection