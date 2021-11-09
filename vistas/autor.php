<html>

<head>

<meta charset="utf-8">
  <title>Biblioteca C&L</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="stylesheet" href="botmat.css">
</head>

<body><?php

ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

else
{
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <CENTER><h1 class="box-title">Autor</h1></CENTER> 
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Editar/Borrar</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            
                            <th>Condición</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div><BR></BR>
                   
                    <center><button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></center><BR></BR>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" name="idautor" id="idautor">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required=" " pattern="[A-Z a-z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descripción:</label>
                            <textarea type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" maxlength="300"required ="" pattern="[a-z A-Z]+"></textarea>
                          </div>
                         
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php

require 'footer.php';
?>
<script type="text/javascript" src="scripts/Autor.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siAutores').addClass("active");
</script></body>

</html>

