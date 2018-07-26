<html>
    <head>
        <title>48modificacion1</title>
    </head>
    <body>
        
  <h1>48modificacion1</h1>

<?php
$con=mysqli_connect("localhost","root","","base1") or die 
("Problemas con la conexión a la base de datos");

$registro=mysqli_query($con,"select descripcion,precio,codigorubro from articulos where codigo=$_REQUEST[codigo]")
or die (mysqli_error($con));

if($reg=mysqli_fetch_array($registro))
{
?>
  <form action="48 modificacionarticulos2.php" method="post">
 descripcion del articulo:
 <input type="text"  name="descripcion" size="50" value="<?php echo $reg['descripcion']; ?>">
 <br>
 precio:
 <input type="text" name="precio" size="10" value="<?php echo $reg['precio']; ?>">
 <br>
 Rubro:
 <select name="codigorubro" >
    <?php
    $registro2=mysqli_query($con,"select codigo,descripcion from rubros")or die (mysqli_error($con));

    while($reg2=mysqli_fetch_array($registro2))
    {
        if($reg2['codigo']==$reg['codigorubro'])
        echo "<option value=\"".$reg2['codigo']."\" selected>".$reg2['descripcion']."</option>";
        else
        echo "<option value=\"".$reg2['codigo']."\" >".$reg2['descripcion']."</option>";

    }
    ?>
</select>

 <input type="hidden"  name="codigo"  value="<?php echo $_REQUEST['codigo']; ?>">
 <br>
 <input type="submit" value="Confirmar">
  </form>   
<?php
}
else
echo 'No existe un articulo con dicho código';

mysqli_close($con);
?>

  </body>
</html>