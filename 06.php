<html>
<style>

body {
  background: silver;
  text-align: justify;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
  color: #757E82;
}
#container {
  margin: 0 auto;
  width: 300px;
  background:#fff;
  border: solid 1px;
}
#header {
  background: blue;
  text-align: center;
  padding: 20px;
  color: white;
  text-shadow: black 0.1em 0.1em 0.2em;
}
#header h1 {
  font-size: 24px;
  margin: 0;
}
#header h2 {
  font-size: 20px;
  margin: 0;
}
#content {
  background: white;
  clear: left;
  padding: 20px;
}
#content h2 {
  color:#000;
  font-size: 160%;
  margin: 0 0 .5em;
}

li {
  padding: 18px;
}
a {
  color: #429;
  text-decoration: none;
}
table, th, td {
  border: 1px solid black;
  border-collapse:collapse;
  padding: 4px;
}
#footer {
  color: white;
  background: blue;
  text-align: center;
  padding: 20px;
  margin: 0px;
  height: 1%;
}

</style>

<?php
/* Generar la  tabla de multiplicar de un número elegido al azar 
  entre 1 y 10 con formato */


$num=random_int(1,10);
 
 echo "<div id='container'>";
 echo "<div id='header'>";
 
 echo "<h1 style=background-color:blue;color:white> TABLA DE MULTIPLICAR </h1>";

 echo "</div>";
 
 echo "<div id='content'>";
 
 echo "<table border=1>";
 
 echo "<tr style=color:gray;font-weight:bold>";
 echo "<td > Tabla de multiplicar del $num </td>";
 echo "<td > </td>";
 echo "</tr>";
 
 for ($i=1;$i<=10;$i++) {
     
   $resu=$num*$i; 
   echo "<tr style=color:gray>";
   echo "<td>";
   echo "$num x $i = ";
   echo "</td>";
   echo "<td style=text-align:right>";
   echo "$resu";
   echo "</td>";
   echo "</tr>";
 } 
   
 echo "</table>";   
 
 echo "</div>";
 echo "</div>";
 
?>
</html>