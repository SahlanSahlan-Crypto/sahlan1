<?php
$s=""; 
if(isset ($_POST['mult'])){
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=$r1*$r2;
}

if(isset ($_POST['add'])){
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=$r1+$r2;
}

if(isset ($_POST['Subs'])){
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=$r1-$r2;
}

if(isset ($_POST['div'])){
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=$r1/$r2;
}

if(isset ($_POST['mod'])){ 
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=$r1%$r2;
}

if(isset ($_POST['power'])){ 
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=pow($r1,$r2);
}

if(isset ($_POST['root'])){
$r1= $_POST['n1'];
$r2=$_POST['n2'];
$s=sqrt($r1+$r2);
}
?>

<html>
<head></head>
<body>
<form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="POST">
Num1:<input type="text" name="n1"> <br/>
Num2: <input type="text" name="n2"> <br/>

<input type="Submit" name="mult" value="*">
<input type="Submit" name="add" value="+">
<input type="Submit" name="Subs" value="-">
<input type="Submit" name="div" value="/">
<input type="Submit" name="mod" value="%">
<input type="Submit" name="power" value="^">
<input type="Submit" name="root" value="root"><br/>

Answer:<input type="text" name="Answer" value="<?php echo $s; ?>"/>
</form>
</body>

</html>




