<?php
$key = "db8292289133ee000480048607d3604d";
$json = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=$key&language=en-US&query=godfather&page=1&include_adult=false");
$result = json_decode($json);
$title = $result->results[0]->poster_path;
var_dump($title);





//echo "<img src=\"https://image.tmdb.org/t/p/w500$lba\">";