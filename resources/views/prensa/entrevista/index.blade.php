@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- left column -->


          <div class="box box-primary">


            <div class="box-header with-border">
              <h3 class="box-title">Agregar Nueva Entrevista</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                 <div class="row">
                    <div class="col-md-3">
                       <label for="usr">Ingresar Titulo de Entrevista:</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="titleComunicado">
                    </div>
                </div>


                <label for="usr">Ingresar descripcion de la entrevista</label>

                <textarea class="form-control" rows="5" id="editor1" name="editor1" ></textarea>


                  <div class="form-group">
                    <label for="exampleInputFile">Carge Imagen</label>
                    <input type="file" id="file">

                    <p class="help-block"></p>
                  </div>
                  <div class="row">
                   <div class="col-sm-4"></div>
                   <div class="col-sm-4">
                     <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="buttonA">Aceptar</button>
                  </div>
                   </div>
                 </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </section>



@endsection

@section('javascript')

 <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('adminlte/css/bootstrap3-wysihtml5.min.css') }}" />

  <script src="{{ url('adminlte/js/ckeditor.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->

  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
@endsection


