<html>

<head>

<meta charset="utf-8">
  <title>Problema_321</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="stylesheet" href="botmat.css">
</head>

<body>
<?php
//Iniciar el buffer
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
include "header.php";
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
                      <center><h1 class="box-title">Administrador </h1></center>
                      <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                         <thead>
                            <th>ID</th>
                            <th> Editar/Borrar</th>
                            <th>Código Postal</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Profesión</th>
                            <th>Apellido</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Login</th>
                           
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                    <br><br>
                     <center><button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i>Agregar </button></center>
                     <br><br>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Código Postal:</label>
                            <input type="hidden" name="idusuario" id="idusuario">
                            <input type="text" class="form-control" name="numero_trabajador" id="numero_trabajador" maxlength="20" placeholder="Número Trabajador" required pattern="[0-9]+">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>DNI:</label>
                            <input type="text" class="form-control" name="dni" id="dni" maxlength="8" placeholder="DNI" required pattern="[0-9]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required pattern="[a-zA-Z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Profesión:</label>
                            <input type="text" class="form-control" name="profesion" id="profesion" maxlength="30" placeholder="Profesión"pattern="[a-zA-Z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Apellido:</label>
                             <input type="text" class="form-control" name="cargo" id="cargo" maxlength="30" placeholder="Apellido"pattern="[a-zA-Z]+">
                            </select>
                          </div>
                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Teléfono" required pattern="[0-9]+">
                          </div>
                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" maxlength="70" placeholder="Dirección" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="Email" required pattern=".+\.com">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Login:</label>
                            <input type="text" class="form-control" name="login" id="login" maxlength="20" placeholder="Usuario" required pattern="[a-zA-Z]+">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Clave:</label>
                            <input type="password" class="form-control" name="clave" id="clave" maxlength="20" placeholder="Clave" required>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><br>
                            <center><button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button> <br><br></center>
                            <center><button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button></center>
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
 include 'footer.php';
?>
<script type ="text/javascript" src="scripts/usuario.js"></script>
<?php
//Cerramos el else
}
//Liberamos el espacio del buffer
ob_end_flush();
?>
<script type="text/javascript">
  $('#siUsuarios').addClass("active");
</script>
</body>

</html>