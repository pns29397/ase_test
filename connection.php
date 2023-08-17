<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "ase_test";

$con = mysqli_connect($server,$user,$password,$db);

if($con)
{
    echo "Connection done";
}
else
{
    echo "Connection Failed";
}
?>