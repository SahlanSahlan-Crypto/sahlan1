<?php
$characters = array(
array("name"=>"hmd","age"=>22,"job"=>"driving"),
array("name"=>"Smd","age"=>29,"job"=>"desighner"),
array("name"=>"Amd","age"=>26,"job"=>"teacher")

);

foreach($characters as $character)
{
echo "Name: ".$character["name"]. "<br>", "Age: ".$character["age"]. "<br>", "Job: ".$character["job"]. "<br>";


}
?>