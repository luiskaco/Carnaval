
@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row" >
        <!-- left column -->

        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Fotografia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
				  <label for="usr">Ingresar Titulo de Fotografia:</label>
				  <input type="text" class="form-control" id="titleComunicado">
				</div>
				  <div class="form-group">
                  <label for="exampleInputFile">Carge Imagen</label>
                  <input type="file" id="file">

                  <p class="help-block"></p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="row">
                   <div class="col-sm-4"></div>
                   <div class="col-sm-4">
                     <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="buttonA">Aceptar</button>
                  </div>
                   </div>
                 </div>
            </form>
          </div>
         </div>

        <div class="col-md-8">





          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Fotos Regristradas</h3>
            </div>
            <br>
            <div class="row">
               <div class="col-md-2">
               </div>
               <div class="col-md-6">
                <div class="form-group">
                <!-- Date range -->
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>


                <!-- /.input group -->
              </div>
               </div>
               <div class="col-md-2">
                <button type="button" class="btn btn-success">Buscar</button>
               </div>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Título de Foto</th>
                  <th>Fecha</th>
                  <th>Validar</th>
                </tr>
                </thead>
                <tbody>


                <tr>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td> <button type="button" class="btn btn-primary">Activado</button> </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

         </div>
       </div>
          <!-- /.box -->
    </section>



@endsection

@section('javascript')

 <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('adminlte/css/daterangepicker.css') }}" />

  <script src="{{ url('adminlte/js/moment.min.js') }}"></script>
  <script src="{{ url('adminlte/js/daterangepicker.js') }}"></script>


<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
     $('#reservation').daterangepicker();
  });
</script>
@endsection