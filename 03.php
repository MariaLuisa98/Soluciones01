<?php
/* Obtener un n�mero al azar entre 1 y 9 y generar una pir�mide 
   con ese n�mero de pelda�os.
   Utilizar la marca <code></code> para que la visualizaci�n no se 
   deforme por el tama�o de los espacio o una estilo con tipo de 
   letra monospace. */


$num=random_int(1,9);

echo "N�mero generado:$num <br> <br>"; 

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