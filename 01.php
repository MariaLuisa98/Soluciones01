<?php
/* Definir dos variables asign�ndoles un valor entero 
   aleatorio entre 1 y 10 y mostrar su suma, su resta, su divisi�n, 
   su multiplicaci�n, m�dulo y potencia (ciclo for). */

$num1=random_int(1,10);
$num2=random_int(1,10);
$potencia=1;

echo "1� N�mero:$num1 <br>";
echo "2� N�mero:$num2 <br> <br>";

$suma=$num1+$num2; echo "$num1+$num2=$suma <br>";

$resta=$num1-$num2; echo "$num1-$num2=$resta <br>";

$multi=$num1*$num2; echo "$num1*$num2=$multi <br>";

$div=$num1/$num2; echo "$num1/$num2=$div <br>";

$modulo=$num1%$num2; echo "$num1%$num2=$modulo <br>";

for ($i=0;$i<$num2;$i++) {
    $potencia=$potencia*$num1;
}
echo "$num1**$num2=$potencia";

?>
