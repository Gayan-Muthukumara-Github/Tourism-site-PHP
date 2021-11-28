<?php

$host ="localhost";
$username ="root";
$password = "";
$database = "touarism";

//Connection
$con = mysqli_connect("$host","$username","$password","$database");

// Check connection
if(!$con)
{
    header("Location: error.php");
    die();
}
else
{
    echo "";
}
?>