@extends('web.layouts.app')

@section('main-content')
<div class="container">
  <div class="row">
<div class="content col-md-9">

  @foreach($posts as $post)

    <div class="card card-success card-outline">
      <div class="card-header">
        <h3 class="card-title">{{ $post->titulo }}</h3>
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
<!-- Agenda -->
 <div class="content col-md-3">
  
  <div class="card">
    <!-- card-header -->
    <div class="card-header">
      Octubre
    </div>
    <!-- card-body -->
    <div class="card-body">
      @foreach ($eventos as $evento)
      <div class="callout callout-danger">
        @if ( $evento->fechaFin < Carbon\Carbon::now())
        <div class="ribbon-wrapper ribbon-xl">
          <div class="ribbon bg-danger text-lg">
          
              FINALIZADO
          
          </div>
        </div>
        @endif
      <div class="display-1 text-danger"><b>{{ Carbon\Carbon::parse($evento->fechaFin)->format('d') }}</b></div>
<div class="card-title">
          {{ $evento->titulo }}
        </div>
      <div class="card-text">
        
        {{ $evento->contenido }}
      </div>

      </div>
      <!-- /.callout -->
       @endforeach
    </div>
    <!-- /.card-body -->
  </div>
    <!-- /.card -->
    
    </div>
    <!-- /.Agenda -->
    </div>
    <!-- /.row -->
 
</div>
<!-- /.container -->

@endsection