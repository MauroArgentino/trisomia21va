  <!-- Logo -->
  <div class="jumbotron text-center parallax" style="margin-bottom:0">
      {{-- <div class="col-md-8 col-lg-6 B"> --}}
         {{--  <div class="card card-inverse card-primary">
              <img src="https://picsum.photos/200/300" class="img-fluid" alt="Responsive image">
          </div> --}}
      {{-- </div> --}}
  </div>
  <!-- /.Logo -->

  <!-- Navbar -->
    <nav class="navbar navbar-default navbar-expand bg-success navbar-light" id="barra-menu">
      <div class="container-fluid">
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  @foreach ($menus as $key => $item)
                      @if ($item['parent'] != 0)
                        @break                                
                      @endif
                      @include('web.partials.menu-item', ['item' => $item])
                  @endforeach
              </ul>
          </div>
      </div>
    </nav>
  <!-- /.navbar -->