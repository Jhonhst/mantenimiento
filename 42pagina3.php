<html>
    <head>
        <title>42pagina3</title>
    </head>
    <body>
        
  

<?php
$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

mysqli_query($con,"update rubros set descripcion='$_REQUEST[descripcion]' 
where codigo=$_REQUEST[codigo]")or die (mysqli_error($con));

echo "Se modificó la descripción del rubro";

mysqli_close($con);
?>

  </body>
</html>