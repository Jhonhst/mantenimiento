<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

$registros=mysqli_query($con,"select ar.codigo as codigoart,  ar.descripcion as descripcionart, precio,  ru.descripcion as descripcionrub from articulos as ar inner join rubros as ru on ru.codigo=ar.codigorubro where ar.codigo=$_REQUEST[codigo]") or die (mysqli_error($con));

if($reg=mysqli_fetch_array($registros))
{
    echo 'Descripcion:  '.$reg['descripcionart'].'<br>';
    echo 'Precio:  '.$reg['precio'].'<br>';
    echo 'Rubro:  '.$reg['descripcionrub'].'<br>';
}
else 
echo 'No existe un artículo con dicho código';

mysqli_close($con);


?>