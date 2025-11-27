<?php
$mark1=45;
$mark2=55;
$mark3=65;
$avg=($mark1+$mark2+$mark3)/3;
if($avg>=90)
$ans="A+";
elseif($avg>=85)
$ans="A";
elseif($avg>=75)
$ans="B+";
elseif($avg>=65)
$ans="B";
elseif($avg>=55)
$ans="C+";
elseif($avg>=45)
$ans="C";
elseif($avg<45)
$ans="F";
else
$ans="Invalid";

echo"mark1=".$mark1."<br/>";
echo"mark2=".$mark2."<br/>";
echo"mark3=".$mark3."<br/>";
print"Grade=".$ans;
?>







