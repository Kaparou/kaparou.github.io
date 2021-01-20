<?php

include_once ('connection.php');
$title = $_GET['movie_name'];

if (isset($_GET['commentsubmit'])){
    if (!(($_GET['uname'] == '')||($_GET['rate'] == ''))) {
        $uname = $_GET['uname'];
        $rate = (double)$_GET['rate'];
        $message = $_GET['message'];

        $date = (string)$_GET['date'];
        $movie_name =  $_GET['movie_name'];

        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword =  "1234";
        $dbName = "moviesdb" ;
        $conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);
        $sql = "INSERT INTO `moviesdb`.`reviews`(`movie_name`,`review`,`user_name`,`date`,`rate`) VALUES ('$movie_name','$message','$uname','$date','$rate')";
        $result = $conn->query($sql);
        header ('Location: Reviews.php? json=' .$movie_name);
        die;
    }
    else{
        header ('Location: emptycomment.php? movie_name=' .$title);
    }
}

?>