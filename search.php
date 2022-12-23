<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

 $songname=$_POST['songname'];
 $sql="select * from music where songname='$songname' or genre='$songname'";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 $ans=1;
 if($num>0){
     $ans=1;
 }
 else{
     $ans=0;
 }
if($ans==1){
    $res=mysqli_fetch_array($result);
    $plays=$res['plays'];
    $timeadded=$res['timeadded'];
    $cid=$res['c_id'];
    $sql="select * from account where ac_id='$cid' ";
    $result2=mysqli_query($con,$sql);
    $res2=mysqli_fetch_array($result2);
    $creator=$res2['name'];}
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Search.css">
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
            <h1>Search</h1>
            <div id="search">
                <form action="search.php" method="post">
                    <input type="text" name="songname" id="searchbar" class="searchbar" placeholder="Search for song/genre"><br>
                    <button id="button" type="submit">Enter</button>
                </form>
                <div>
                    <span color="white">
                        <?php
                        if($ans==1){
                           echo" <div id ='songsuploaded'>";
                            echo"<h4>"; echo"Song : $songname"; echo"</h4>"; 
                            echo"<h4>"; echo"Creator : $creator"; echo"</h4>"; 
                            echo"<h4>"; echo"Plays : $plays"; echo"</h4>"; 
                            echo"<h4>"; echo"Added: $timeadded"; echo"</h4>"; 
                            echo"</div>";
                        }
                        else{
                            echo"Song not present";
                        }
                        ?>
                    </span>
                </div>

            </div>


        </div>
    </div>
</body>

</html>