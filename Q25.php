<?php
$year=2005;
if(($year%4==0 &&$year%100!=0) || ($year%400==0)){
echo "Leap year";}

else
{echo"Not leap year";}
?>