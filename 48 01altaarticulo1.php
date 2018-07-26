<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> mysqli-alta tabla articulos </title>
</head>
<body>
    <h1> mysqli-alta tabla articulos </h1>
    <form action="48 01altaarticulo2.php" method="post">
        Ingrese descripción del artículo:
   <input type="text" name="descripcion" required>
   <br> 
   Ingrese precio del artículo:
   <input type="text" name="precio" required>
   <br>
seleccione Rubro:
<select name="codigorubro">
    <?php

$con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

$registros=mysqli_query($con,"select codigo,descripcion from rubros")    or die (mysqli_error($con));

while($reg=mysqli_fetch_array($registros))
{
    echo "<option value=\"".$reg['codigo']."\"> ".$reg['descripcion']."  </option>";
}
    ?>
</select>
<br>
   <input type="submit" value="Confirmar">
</form>
</body>
</html>