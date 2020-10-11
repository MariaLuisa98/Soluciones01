<html>
<head>
<meta http-equiv="refresh" content="5">
</head> 
<?php
/* Elegir tres valores entre 100 y 500 y pintar tres barras de 
   color rojo, verde y azul del tamaño indicado.
   Hacer que la página se cargue de forma automática cada 5 segundos */

$rojo=random_int(100,500);
$verde=random_int(100,500);
$azul=random_int(100,500);

 echo "<table style=background-color:red;width:$rojo>";
 echo "<tr height=35px>";
 echo "<td style=background-size:$rojo> Rojo($rojo) </td>";
 echo "</tr>";
 echo "</table>"; 
 
 echo "<table style=background-color:green;width:$verde>"; 
 echo "<tr height=35px>";
 echo "<td > Verde($verde) </td>";
 echo "</table>"; 
 
 echo "<table style=background-color:blue;width:$azul>"; 
 echo "<tr height=35px>";
 echo "<td > Azul($azul) </td>";
 echo "</table>";   
 
?>
</html>

