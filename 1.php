


<html>
<head><title> Student Registration </title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Student Index NO:<input type="text" name="id"><br>
Student Name:    <input type="text" name="fname"><br>
Student Email:   <input type="text" name="mail"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mail = $_POST['mail'];

    echo "ID: $id <br>";
    echo "Name: $fname <br>";
    echo "Email: $mail <br>";
}

?>

