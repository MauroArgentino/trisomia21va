@extends('web.layouts.app')

@section('main-content')
<div class="container">
  <div class="col-md-8">

      <div class="card">
        <div class="card-header bg-success">
          <h2>{{ $post->titulo }}</h2>
        </div>
        <div class="card-body">
          Categoría
          <a href="{{ route('web.categoria', $post->categoria->slug)}}">{{ $post->categoria->descripcion }}</a>
          @if ($post->imagen_id)
            <img src="{{ $post->imagen->ruta_imagen }}" class="img-fluid rounded">
          @endif
          <hr>
           {!! $post->contenido !!}
           <hr>
           <i class="fa fa-tag"></i> Etiquetas
           @foreach ($post->tags as $tag)
              <a href="{{ route('web.tag', $tag->slug)}}"><span class="badge badge-info">{{ $tag->descripcion }}</span></a>
           @endforeach
           <span class="float-right">Publicado el {{ $post->created_at }} por <a href="{{ route('web.user', $post->user_create->slug) }}">{{ $post->user_create->name }}</a></span>
        </div>
      </div>

  </div>
  <div class="col-md-3">
  </div>
</div>
@endsection