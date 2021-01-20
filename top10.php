<?php

$key = "db8292289133ee000480048607d3604d";
$json = file_get_contents("https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=en-US&page=1");
$result = json_decode($json);


?>
<html>

    <title> Highest Rated Movies </title>

    <style>
        body {
            height: 230%;
        }

        .about{
            position: relative;


        }

        .number{
            font-size: x-large;
        }
        .text{
            font-size: x-large;
        }

        .list_element{
            width: 30%;
            padding: 10px;
            position: absolute;
            float: left;
            display: inline-block;
            height: auto;
        }

        .right_element{
            position: absolute;
            float: right;
            right: 20%;
            height: auto%;
            width: 30%;
            padding: 10px;
            display: inline-block;
        }



    </style>
<head>
    <title>MoviePedia</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<section class = "header">

    <section class = "title">
        <em>MoviePedia</em>
    </section>

</section>
<div class = "searchbar">
    <a href="Home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a class="active" href="top10.php">Highest rated movies</a>
    <a href="top10Users.php">Most followed users</a>
    <form action="response.php" method = "get">
        <input type = "text" name = "movie" placeholder="Search...">
        <input type = "submit" name = "submit_form" value = "search";>
    </form>

</div>
<div>
    <section class = "about">
        <div class = "list_element">
            <?php
            $i = 0;
            while($i<5){
            ?>
            <div class = "number"><?php echo ($i+1)?>.</div>
            <?php
            $m_id= $result->results[$i]->id;
            $poster_path = $result->results[$i]->poster_path;
            $poster_url = "https://image.tmdb.org/t/p/w92$poster_path";
            $title = $result->results[$i]->title;
            $description = $result->results[$i]->overview;
            $vote = $result->results[$i]->vote_average;
            ?>
            <img src ="<?php echo $poster_url?>">
            <a href="http://localhost:63342/WWW/movie_page.php?%20json=<?php echo $title?>" class = "text"><?php echo $title?></a>
            <div class = "text">Overview:<br> <?php echo $description?></div>
            <div class = "text">Rating: <?php echo $vote?></div><br><br>
            <?php $i++;} ?>
        </div>
        <div class="right_element">
            <?php
            $i = 5;
            while($i<10){
                ?>
                <div class = "number"><?php echo ($i+1)?>.</div>
                <?php
                $m_id= $result->results[$i]->id;
                $poster_path = $result->results[$i]->poster_path;
                $poster_url = "https://image.tmdb.org/t/p/w92$poster_path";
                $title = $result->results[$i]->title;
                $description = $result->results[$i]->overview;
                $vote = $result->results[$i]->vote_average;
                ?>
                <img src ="<?php echo $poster_url?>">
                <a href="http://localhost:63342/WWW/movie_page.php?%20json=<?php echo $title?>" class = "text"><?php echo $title?></a>
                <div class = "text">Overview:<br> <?php echo $description?></div>
                <div class = "text">Rating: <?php echo $vote?></div><br><br>
                <?php $i++;} ?>
        </div>

    </section>


    </section>

</div>
</body>


</html>
