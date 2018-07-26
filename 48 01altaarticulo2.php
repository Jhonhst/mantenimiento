<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

mysqli_query($con,"insert into articulos(descripcion,precio,codigorubro) values 
('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])")   
 or die (mysqli_error($con));

mysqli_close($con);

header('Location:48 1mantenimientoarticulos.php');
?>