<?php
/* Generar n�meros al azar entre 1 y 10 hasta que se generen 3 veces 
   el valor 6 de forma consecutiva en ese caso se mostrar� 
   cuantos n�meros se han generado. 
   Para obtener los segundos utilizamos la funci�n microtime(true)  
   para obtener la fecha actual en segundos. */


$veces=0;
$num6=0;

do {
    
    $num=random_int(1,10);
    
     $veces++;

    if ($num==6) {
    $num6++;
    } else { $num6=0; }
    
} while ($num6!=3);

echo "Han salido tres 6 seguidos tras generar ".$veces." n�meros en ".microtime(true)." milisegundos.";

?>