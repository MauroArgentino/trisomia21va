@extends('admin.layouts.app')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
         </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Titulos de los Posts</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                      <!-- card-body -->
                      <div class="card-body">
                        <div class="form-group">
                          <label for="titulo">Título</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="titulo" placeholder="Ingrese el título del Post">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ruta amigable</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="slug" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Seleccionar imagen</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Subido</span>
                            </div>
                          </div>
                        </div>
                       
                         <div class="form-group">
                            <label>
                                Contenido
                              </label>
                            <div class="mb-3">
                              <textarea class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Tags</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" name="tags" placeholder="Ej.: Evento, Inclusion, Torneo">
                            </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Publicar</label>
                          </div>
               

                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection