<?php
$f="call.php";
$fo=fopen($f,"r") or die("couldn't open");
while(!feof($fo)){
$line=fgets($fo, 5);
echo"$line<br/>";
}
fclose($fo);
?>
