<?php
/* Obtener un número al azar entre 1 y 9 y generar una la 
   escalera numérica del tamaño indicado alternando colores entre 
   rojo y azul. */

$num=random_int(1,9);

echo "Número generado:$num <br>"; 

for ($i=1;$i<=$num;$i++) {
    
    if ($i%2==0) {$color="red";} else { $color="blue"; }

    echo "<br>";
    
    for ($j=1;$j<=$i;$j++) {
        
    echo "<font color=$color>$i</font>";
    
    }
}

?>