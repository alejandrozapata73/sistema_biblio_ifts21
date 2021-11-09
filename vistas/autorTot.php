<?php
$conexion = mysqli_connect("localhost", "root", "", "sistemabiblioteca");
$conexion -> set_charset("utf8");
?>
<!DOCTYPE html>
<html>
<head>
    

<link rel="stylesheet" href="PRUEBAA.css">
    <title>Document</title>
</head>
<body>
    <div id="main-container">
    <br>
    <thead>
    <table >
    <tr >
        <th>Nombre</th>
        <th>Autor</th>
    </tr>
</thead>
    <?php
    $sql="  select lib.idlibro as codigo,
    titulo,
    nombre
    from libro as lib
    inner join autor as mat
    on lib.idautor= mat.idautor
    ";
    $result= mysqli_query($conexion,$sql);
    while ($mostrar=mysqli_fetch_array($result)){
 ?>
<tr>
    
    <td><?php echo $mostrar ['titulo'] ?></td>
    <td><?php echo $mostrar ['nombre'] ?></td>

    
</tr>
</div>

<?php

    }
   
    ?>
</body>
</table><BR></BR><button><A href="listadoautores.html">volver atras</A></button>
</html>