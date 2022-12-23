<?php
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
    <link rel="stylesheet" href="creatorhome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>GEET - Music for the Soul!</title>
</head>

<body>
    <div id="entirepage">
    <div id="sidebar">
            <img id="logo" src="geetlogo.png" alt="GEET logo" width="125px" height="125px">
            <ul type="none" id="navbar">
                <button type="button" id="homebutton" class="navopt">
                    <div>
                        <a href="creatorhome.php" target="_self"><b>Home</b></a>
                    </div>
                </button>
                <button type="button" id="dashbutton" class="navopt">
                    <div>
                        <a href="creatordash.php" target="_self"><b>Dashboard</b></a>
                    </div>
                </button>
                <button type="button" id="addsongbutton" class="navopt">
                    <div>
                        <a href="addsong.php" target="_self"><b>Add Song</b></a>
                    </div>
                </button>
                <button type="button" id="profilebutton" class="navopt">
                    <div>
                        <a href="creatorprofile.php" target="_self"><b>Profile</b></a>
                    </div>
                </button>
            </ul>
        </div>
        <div id="pagecontent">
            <div id="hello">
                <h1>Hello, <?php echo"$name"?></h1>
            </div>
            <div>
                <p id="intro">Hey, Creator, Geet provides you a platform to upload your exclusive content and showcase
                    your talent to the World.</p>
                <br>
            </div>
            <div id="wcmt" class="image">
                <img src="whenchaimettoast.webp" alt="whenchaimettoast" width="600px" height="350px">
                <br>
                <br>
            </div>
            <div id="hts" class="image">
                <img src="heresthesituation.jpeg" alt="heresthesituation" width="600px" height="400px">
            </div>
        </div>
    </div>
</body>

</html>