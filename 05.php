<html>

<style>

table { border-collapse:collapse; }
td { border: 1px solid black; padding: 8px; }

</style>

<?php
/* Realizar un segunda versión del primer ejercicio donde la 
   página de resultado tiene que mostrar una tabla con formato. */

$num1=random_int(1,10);
$num2=random_int(1,10);

echo "1º Número:$num1 <br>"; 
echo "2º Número:$num2 <br> <br>";

$suma=$num1+$num2;
$resta=$num1-$num2;
$multi=$num1*$num2;
$div=$num1/$num2;
$modulo=$num1%$num2;
for ($i=0;$i<$num2;$i++) {
   $potencia=$num1*$num1;
}

 
 echo "<table>";
 
 echo "<tr style=background-color:darkgray;font-weight:bold;color:blue>";
 echo "<td > Operación </td>";
 echo "<td style=text-align:right> Resultado </td>";
 echo "</tr>";
 
 echo "<tr>";
 echo "<td> $num1 + $num2 </td>";
 echo "<td style=text-align:right> $suma </td>";
 echo "</tr>";
 
 echo "<tr style=background-color:#f2f2f2>";
 echo "<td> $num1 - $num2 </td>";
 echo "<td style=text-align:right> $resta </td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td> $num1 * $num2 </td>";
 echo "<td style=text-align:right> $multi </td>";
 echo "</tr>";

 echo "<tr style=background-color:#f2f2f2>";
 echo "<td> $num1 / $num2 </td>";
 echo "<td style=text-align:right> $div </td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td> $num1 % $num2 </td>";
 echo "<td style=text-align:right> $modulo </td>";
 echo "</tr>";

 echo "<tr style=background-color:#f2f2f2>";
 echo "<td> $num1<sup>$num2</sup> </td>";
 echo "<td style=text-align:right> $potencia </td>";
 echo "</tr>";
 
 echo "</table>";
 
?>
</html>