<?php
function area($radious){
 return 3.14159*$radious*$radious;
}
function cercumference ($radious){
 return 2*3.14159*$radious;
}
$r=5;
echo"<h3>Results:</h3>";
echo"Radious=$r<br>";
echo"Area=".area($r)."<br>";
echo"Circumference=".cercumference($r)."<br>";
?>