
@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">hola git
      <div class="row" >
        <!-- left column -->

        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Nueva Noticia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
				  <label for="usr">Ingresar Titulo de Noticia:</label>
				  <input type="text" class="form-control" id="titleComunicado">
				</div>

              <div class="form-group">
				  <label for="comment">Escribir discripición:</label>
				  <textarea class="form-control" rows="5" id="discripicion"></textarea>
				</div>

				  <div class="form-group">
                  <label for="exampleInputFile">Carge Imagen</label>
                  <input type="file" id="file">

                  <p class="help-block"></p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="button1">Aceptar</button>
              </div>
            </form>
          </div>
         </div>

        <div class="col-md-8">





          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Noticias Registrados</h3>
            </div>
            <br>
            <div class="row">
               <div class="col-md-2">
               </div>
               <div class="col-md-6">
                 <input class="form-control" type="text" placeholder="Escribir titulo de noticia" aria-label="Buscar">
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
                  <th>Título de Noticia</th>
                  <th>Fecha</th>
                  <th>Validar</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> <button type="button" class="btn btn-primary">Activado</button> </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td><button type="button" class="btn btn-primary">Activado</button></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td><button type="button" class="btn btn-primary">Activado</button></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td><button type="button" class="btn btn-primary" >Activado</button></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td><button type="button" class="btn btn-primary" id="button1">Activado</button></td>
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


  <script type="text/javascript">
  $(document).ready(function(){
       $("#button1").click(function(){
             $("#button1").attr('class', 'btn btn-danger');
       });
  });

</script>
@endsection

