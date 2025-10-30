<?php
echo"<table border=1>";
echo"<tr>";
for($i=1;$i<=6;$i++){
   for($j=1;$j<=5;$j++){
echo"<td>" . $i . " * " . $j . " = " . ($i * $j) . "</td>";
}
echo "</tr>";
}
echo "</table>";
?>