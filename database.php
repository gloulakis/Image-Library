<?php
$hostname     = "localhost";
$username     = "root";
$password     = "root"; 
$databasename = "photodatabase"; 
$conn = new mysqli($hostname, $username, $password,$databasename);
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>