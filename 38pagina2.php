<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

mysqli_query($con,"insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or die (mysqli_error($con));

mysqli_close($con);

echo "El nuevo rubro se almacenó";
?>