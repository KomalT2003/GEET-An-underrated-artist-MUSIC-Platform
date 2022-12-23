<?php

include 'connect.php';

session_start();
$u_id=$_SESSION['ac_id'];
echo"$u_id";
$sql="Select * from playlist where u_id='$u_id' ";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
$playlistname=$res['playlistname'];
echo"$playlistname";
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="YP.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>

<body>
    <div id="layout">
    <div id="sidebar">
            <img id="geet" src="geetlogo.png" alt="geet">
            <button class="nav"><a href="home.php">Home</a></button>
            <button class="nav"><a href="search.php">Search</a></button>
            <button class="nav"><a href="yp.php">Your Playlist</a></button>
            <button class="nav"><a href="cap.php">Create Playlist</a></button>
        </div>
        <div id="content">
        <?php
            $sql="Select * from playlist where u_id='$u_id' ";
            $result=mysqli_query($con,$sql);
            
            while($res=mysqli_fetch_assoc($result)){
                $playlistname=$res['playlistname'];

                echo"<div>
                <span id='name'>";
                    echo"<h1>";
                    echo"$playlistname"; 
                    echo"</h1 id='playlistname'>";  
                    $sql="Select * from playlist where playlistname='$playlistname' ";
                    $result=mysqli_query($con,$sql);
                    while($res=mysqli_fetch_assoc($result)){
                        echo"<br>";
                        $songname=$res['songname'];
                        echo"<div id='songsuploaded'>";
                        echo"<h5 id='songname'>";
                        echo"$songname";
                        echo"</h5>";
                        echo"</div>";
                    }
                echo"</span>";
                echo"
                </div>";
                echo"<br>";
            }
            ?>
            
          


        </div>
    </div>
</body>

</html>