<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword =  "1234";
$dbName = "moviesdb" ;

//$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
//$conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );

$conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);


