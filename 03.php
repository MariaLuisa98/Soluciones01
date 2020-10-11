<?php
/* Obtener un número al azar entre 1 y 9 y generar una pirámide 
   con ese número de peldaños.
   Utilizar la marca <code></code> para que la visualización no se 
   deforme por el tamaño de los espacio o una estilo con tipo de 
   letra monospace. */


$num=random_int(1,9);

echo "Número generado:$num <br> <br>"; 

for($i=1;$i<$num+1;$i++){
    for($espacio=$num+($num/2);$espacio>$i;$espacio--){
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=2*$i-1;$j++){
        echo "<code>*</code>";
    }
    echo "</br>";
}

?>