<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mantenimiento articulos</title>
    <style>
    .tablalistado{
        border-collapse: collapse;
        box-shadow:0px 0px 8px #000;
        margin:20px;
    }
    .tablalistado th{
       border:1px solid #000;
       padding:5px;
       background-color:#ffd040;
    }
    .tablalistado td{
       border:1px solid #000;
       padding:5px;
       background-color:#ffdd73;
    }
</style>
</head>
<body>
    <h1>mantenimiento  articulos</h1>
    <?php
  $con=mysqli_connect("localhost","root","","base1") or die ("Problemas con la conexión a la base de datos");

  $registros=mysqli_query($con,"select ar.codigo as codigoart,  ar.descripcion as descripcionart, precio,  ru.descripcion as descripcionrub from articulos as ar inner join rubros as ru on ru.codigo=ar.codigorubro") or die (mysqli_error($con));
  
  echo '<table class="tablalistado">';
  echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th><th>Borrar</th><th>Modificar</th></tr>';
  while($reg=mysqli_fetch_array($registros))
  {
      echo '<tr>';
      echo '<td>';
      echo $reg['codigoart'];
      echo '</td>';
      echo '<td>';
      echo $reg['descripcionart'];
      echo '</td>';
      echo '<td>';
      echo $reg['precio'];
      echo '</td>';
      echo '<td>';
      echo $reg['descripcionrub'];
      echo '</td>';
      echo '<td>';
      echo '<a href="48 borrar bajaarticulo.php?codigo='.$reg['codigoart'].'">Borrar?</a>';
      echo '</td>';
      echo '<td>';
      echo '<a href="48 modificacionarticulos1.php?codigo='.$reg['codigoart'].'">Modifica?</a>';
      echo '</td>';
      echo '</tr>';
  }
  echo '<tr><td colspan="6">';
  echo '<a href="48 01altaarticulo1.php">Agregar un nuevo artículo?</a>';
  echo '</td></tr>';
?>
<form action="48 buscar.php" method="post"> Colsultar: <input type="text" name="codigo" size="10" required> <input type="submit" value="Colsultar"></form>
<?php
  echo '</table>';

  mysqli_close($con);


    ?>

</body>
</html>

