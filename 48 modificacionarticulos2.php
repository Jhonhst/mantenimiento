<html>
    <head>
        <title>48modificacion2</title>
    </head>
    <body>
        
  <h1>48modificacion2</h1>

<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

mysqli_query($con,"update articulos set descripcion='$_REQUEST[descripcion]',precio='$_REQUEST[precio]',codigorubro='$_REQUEST[codigorubro]'
 where codigo=$_REQUEST[codigo]")or die (mysqli_error($con));

mysqli_close($con);

header('Location:48 1mantenimientoarticulos.php');
?>

  </body>
</html>