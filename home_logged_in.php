<html>

<head>
    <title>MoviePedia</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<section class = "header">
    <div class = "logbt">
        <input type = "button" value ="profile">

    </div>
    <section class = "title">
        <em>MoviePedia</em>
    </section>

</section>
<div class = "searchbar">
    <a class="active" href="Home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="top_10">Highest rated movies</a>
    <a href="top_10">Most followed users</a>
    <form action="response.php" method = "get">
        <input type = "text" name = "movie" placeholder="Search...">
        <input type = "submit" name = "submit_form" value = "search";>
    </form>

</div>
<div>
    <section class = "foot"></section>

</div>
</body>


</html>