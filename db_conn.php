
<html>
<head><title>Student Registration</title></head>
<body>

<form action="" method="POST">
    Student Index NO: <input type="text" name="id"><br>
    Student Name: <input type="text" name="fname"><br>
    Student Student Email: <input type="text" name="mail"><br>
    Student Student Phone NO: <input type="text" name="num"><br>
    <input type="submit" name="Insert" value="Insert">
</form>

</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["Insert"])) {

    $stID = $_POST["id"];
    $stnme = $_POST["fname"];
    $stmail = $_POST["mail"];
    $stphonenum = $_POST["num"];


    $sql = "INSERT INTO st_table (StudentID, StudentName, StudentEmail,Studentphonenum)
            VALUES ('$stID', '$stnme', '$stmail','$stphonenum')";
   $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>