  <!-- Logo -->
  <div class="jumbotron text-center parallax" style="margin-bottom:0"></div>
  <!-- /.Logo -->

  <!-- Navbar -->
    <nav class="navbar navbar-default navbar-expand {{-- bg-success --}} navbar-light" id="barra-menu">
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