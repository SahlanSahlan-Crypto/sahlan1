<?php
if (isset($_POST['Submit'])) {

    $name = $_POST["fname"] ?? '';
    $age  = $_POST["age"] ?? '';

    echo $name;
    echo "<br>";
    echo $age;
}
?>