<?php

$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="farm";

$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn)
{
    echo("Connection failed");
    die();
}