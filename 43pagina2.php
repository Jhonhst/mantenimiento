<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");


$verificarDescripcion=mysqli_query($con, "SELECT *  FROM articulos WHERE descripcion=$_REQUEST[descripcion] ");
if(mysqli_num_rows($verificarDescripcion)>0){
    echo "el usuario ya esta registrado";
    exit;
}

mysqli_query($con,"insert into articulos(descripcion,precio,codigorubro) values 
('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])")   
 or die (mysqli_error($con));


mysqli_close($con);

echo  'El nuevo artículo se almacenó';
?>