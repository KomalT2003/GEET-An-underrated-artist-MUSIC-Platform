<?php
include 'connect.php';
 session_start();
 $name=$_SESSION['username'];
 echo"$name";
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>

<body>
    <article id="layout">
        <div id="sidebar">
            <img id="geet" src="geetlogo.png" alt="geet">
            <button class="nav"><a href="home.php">Home</a></button>
            <button class="nav"><a href="search.php">Search</a></button>
            <button class="nav"><a href="yp.php">Your Playlist</a></button>
            <button class="nav"><a href="cap.php">Create Playlist</a></button>
        </div>

        <div id="content">
            <h1>Hello , <?php echo"$name"?></h1>
            <p id="top"> On Geet, find soulful music by Undiscovered Artists!
           We encourage music with a cause.<br> We bring you the best unheard artists in India!
           
            </p>

            <div id="artist">
                <img src="whenchaimettoast.webp" alt="sm" width="800" height="400">
                <p id="t1">Artist <br> Making an impact</p>
            </div>
            <div id="podcast">
                <img src="heresthesituation.jpeg" alt="pod" width="800" height="400">
                <p id="t2"> Podcasts!<br> Unheard</p>
            </div>

        </div>
    </article>
</body>

</html>