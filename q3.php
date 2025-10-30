<?php
$month=11;
switch($month){
case 3:
case 4:
case 5:
 echo"Season:Spring";
 break;

case 6:
case 7:
case 8:
 echo"Season:Summer";
 break;

case 9:
case 10:
case 11:
 echo"Season:Autumn";
 break;

case 12:
case 1:
case 2:
 echo"Season:winter";
 break;

default:
 echo"out of month";
 break;

}
?>