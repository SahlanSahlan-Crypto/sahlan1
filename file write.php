<?php
$file=fopen("sahlanASM.txt","w") or die ("couldn't open the file");
fwrite($file,"A.S.M SaHLaN") or die("couldn't write into file");
fclose($file);
echo("Written Successfully");
?>