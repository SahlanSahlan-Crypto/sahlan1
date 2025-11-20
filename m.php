<?php
$s="";
if(isset ($_POST['mult'])){
 
$r1=$_POST['n1'];
$r2=$_POST['n2'];
$s=$r1*$r2;
}
?>

<html>
<head></head>
<body>
<form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="POST">
Num1:<input type="text" name="n1"> <br/>
Num2: <input type="text" name="n2"> <br/>

<input type="Submit" name="mult" value="*">


Answer:<input type="text" name="Answer" value="<?php echo $s; ?>"/>
</form>
</body>

</html>

