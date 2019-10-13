@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Evento</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" action="{{ route('admin.evento.store') }}" method="POST">
			          @csrf
                <div class="card-body">
				
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el título" name="titulo">
                  </div>
				  
                  <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <textarea type="textarea" class="textarea" id="" placeholder="Ingrese la descripción del Evento" name="contenido"></textarea>
                  </div>
				  
				  <div class="row">
					  <div class="form-group col-md-4">
					  <label>Fecha Inicio</label>
					  <div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
						</div>
						<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" im-insert="true" name="fechaInicio">
					  </div>
					  </div>
					  <div class="form-group col-md-4">
					   <label>Fecha Fin</label>
					  <div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
						</div>
						<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" im-insert="true" name="fechaFin">
					  </div>
					  </div>
				  
					 
					  <div class="form-group col-md-4">
                <div class="bootstrap-timepicker">
						<label>Horario</label>

						<div class="input-group date" id="timepicker" data-target-input="nearest">
						  <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="horario">
						  <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
							  <div class="input-group-text"><i class="far fa-clock"></i></div>
						  </div>
						  </div>
						<!-- /.input group -->
					  </div>
					  <!-- /.form group -->
					   </div>
					</div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Organizador</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el nombre del ente que organiza" name="enteOrganizador">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Ubicación</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la ubicación del evento" name="ubicacion">
                    </div>
				  
                  <div class="form-group">
                    <label for="exampleInputFile">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagenUrl">
                        <label class="custom-file-label" for="exampleInputFile">Seleccione un archivo de imagen</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Crear</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
			
</div>
@endsection