<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

$registro=mysqli_query($con,"select descripcion from rubros where codigo=$_REQUEST[codigo]")or die (mysqli_error($con));

if($reg=mysqli_fetch_array($registro))
echo 'La descripción del rubro es:  '.$reg['descripcion'];
else
echo "No existe un rubro con dicho código"
?>