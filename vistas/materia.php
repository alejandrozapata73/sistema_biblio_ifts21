<html>

<head>

<meta charset="utf-8">
  <title>Problema</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="stylesheet" href="botmat.css">
</head>

<body>
<?php



ob_start();
session_start();
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
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
                    
                          <CENTER><h1 class="box-title">Genero</h1></CENTER> 
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            
                         

                          </thead>
                          <tbody>                            
                          </tbody>
                        </table><br><br>

                       

                        
                        </HTML:5>
                    </div>
                    
                  
                    <center><button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"><br></i> Agregar</button></center> <br> <br> <br> <br>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" name="idmateria" id="idmateria">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required ="" pattern="[a-z A-Z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Descripción:</label>
                            <textarea type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" maxlength="300"required ="" pattern="[a-z A-Z]+"></textarea>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <center> <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button></center>  
<br>
                          <center> <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button></center>  
                          <br>
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
<script type="text/javascript" src="scripts/materia.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siMaterias').addClass("active");
</script>
</body>

</html>

