<html>
<head><title>Student Registration</title></head>
<body>

<form action="" method="POST">
    Student Index NO: <input type="text" name="id" value=""><br>
    Student Name: <input type="text" name="fname" value=""><br>
    Student Email: <input type="text" name="mail" value=""><br>
    Student Phone NO: <input type="text" name="num" value=""><br><br>

    <input type="submit" name="Insert" value="Insert">
    <input type="submit" name="Update" value="Update">
    <input type="submit" name="Delete" value="Delete">
    <input type="reset" value="Clear">

</form>

</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student_db";

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

    $sql = "INSERT INTO stu_table (StudentID, StudentName, StudentEmail, Studentphonenum)
            VALUES ('$stID', '$stnme', '$stmail', '$stphonenum')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


// UPDATE RECORD
if (isset($_POST["Update"])) {

    $stID = $_POST["id"];
    $stnme = $_POST["fname"];
    $stmail = $_POST["mail"];
    $stphonenum = $_POST["num"];

    $sql = "UPDATE stu_table 
            SET StudentName='$stnme', StudentEmail='$stmail', Studentphonenum='$stphonenum'
            WHERE StudentID='$stID'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


// DELETE RECORD
if (isset($_POST["Delete"])) {

    $stID = $_POST["id"];

    $sql = "DELETE FROM stu_table WHERE StudentID='$stID'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>