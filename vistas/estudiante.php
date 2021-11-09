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
                          <center><h1 class="box-title">Estudiante </h1></center>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Editar/Borrar</th>
                            <th>DNI</th>
                            <th>Apellido
                            <th>Nombre</th>
                            <th>Carrera Profesional</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Condición</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div><br><br>
                   <center> <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></center><br><br>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Dni:</label>
                            <input type="hidden" name="idestudiante" id="idestudiante">
                            <input type="number" class="form-control" name="codigo" id="codigo" maxlength="8" placeholder="dni" required ="" pattern="[0-9]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Apellido:</label>
                            <input type="text" class="form-control" name="dni" id="dni" maxlength="150" placeholder="Apellido"required ="" pattern="[a-z A-Z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre"required ="" pattern="[a-z A-Z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Carrera Profesion                                                                                                                                                                                                                                                                                                                                                               al:</label>
                            <select class="form-control select-picker" name="carrera" id="carrera" required>                                                                         
                              <option selected>Desarrollo de Software</option>
                              <option>Robotica</option>
                              <option>Analista de sistemas</option>
                              <option>Mecánica Automotriz</option>
                              <option>Diseño grafico</option>
                              <option>Programacion</option>
                              <option>Reparacion de pc</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Dirección:</label>
                            <input  class="form-control" name="direccion" id="direccion"  placeholder="Dirección" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono:</label>
                            <input type="number" class="form-control" name="telefono" id="telefono"  placeholder="Teléfono"required ="" pattern="[0-9]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="Email" required ="" pattern=".+\.com" >
                          </div><br> <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <center><button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button></center><br>
                            <center><button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button></center>
                        </form>
                          </div>  <br>         
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
<script type="text/javascript" src="scripts/estudiante.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siEstudiantes').addClass("active");
</script>

</body>

</html>


