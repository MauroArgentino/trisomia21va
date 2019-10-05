@extends('web.layouts.app')

@section('main-content')
<div class="container">
<div class="posts col-md-8 col-md-offset-2">

  @foreach($posts as $post)

    <div class="card">
      <div class="card-header bg-success">
        {{ $post->titulo }}
      </div>
      <div class="card-body">
        @if ($post->imagen_id)
          <img src="{{ $post->imagen->ruta_imagen }}" class="img-fluid rounded">

        @endif
         {{ $post->contenido }}
         <a href="{{ route('web.post', $post->slug)}}" class="float-right">Leer más</a>
      </div>
    </div>

  @endforeach
  {{ $posts->links() }}
</div>
</div>
@endsection