<?php
set_error_handler(function() { /* ignore errors */ });
include_once ('connection.php');
include'Commentop.php';
echo "<link rel='stylesheet' type='text/css' href='Comments.css'>";
$title=$_GET['json'];
$title = rawurlencode($title);
?>
<html>

<head>
    <title><?php echo rawurldecode($title)?> Reviews</title>

    <h1><?php echo rawurldecode($title)?> Reviews</h1>

</head>

<body>



<form method = "get" action = "Commentop.php">
    <h3>Name:</h3> <input type = 'text' name = 'uname' placeholder = 'Your name'>
    <h3>Rate:</h3> <input type = 'text' name = 'rate' placeholder = '0-10'>
    <h3>Write your review below</h3><textarea name = 'message'></textarea><br>
    <input type = 'hidden' name = 'movie_name' value = <?php echo $title ?>>
    <input type = 'hidden' name = 'date' value = '<?php echo date('d/m/Y')?>'>
    <button type = 'submit' name ='commentsubmit'>Comment</button>
</form>
<form action = "Home.php">
    <button type = 'submit' name = 'Homesubmit'>Home</button>

</form>



<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword =  "1234";
$dbName = "moviesdb" ;

$conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);
$sql = "SELECT * FROM MOVIESDB.reviews";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    if (!strcasecmp($row['movie_name'], $title)){
        echo"<div class = 'reviews-box'>";
        echo $row['user_name']."<h3> Rate: ";
        echo $row['rate']." Date: ";
        echo $row['date']."<br><br></h3>";
        echo $row['review'];
        echo "<br>";
        echo"</div>";

    }

}

restore_error_handler();
?>
</body>




</html>






