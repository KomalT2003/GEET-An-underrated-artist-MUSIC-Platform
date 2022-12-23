<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    session_start();
    $u_id=$_SESSION['ac_id'];
    echo"$u_id";

    $songname=$_POST['songname'];
    $playlistname=$_POST['playlistname'];
    $sql="Select * from music where songname='$songname'";
    $result=mysqli_query($con,$sql);
    $res=mysqli_fetch_array($result);
    $duration=$res['duration'];
    $m_id=$res['m_id'];
    $plays=$res['plays'];
    $timeadded=$res['timeadded'];
    $c_id=$res['c_id'];
    echo"$c_id";
    $sql="Select * from account where ac_id='$c_id'";
    $result2=mysqli_query($con,$sql);
    $res2=mysqli_fetch_array($result2);
    $creator=$res2['name'];
    
    echo"$u_id";

    $sql="insert into `playlist`(u_id,playlistname,duration,songname,m_id) values ('$u_id','$playlistname','$duration','$songname','$m_id')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"data inserted successfully";
    }
    else{
        echo"song coud not be added";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cap.css">
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
            <h1>Create a Playlist!</h1>
            <div id="upper">
                <form action="cap.php" method="post">
                    
                    <label for="searchbar">Name the Playlist!</label>
                    <input type="text" name="playlistname" id="searchbar" class="search" placeholder="Name of the playlist">

                    <label for="sfs">Search for your Songs.</label>
                    <input type="text" name="songname" id="sfs" class="search" placeholder="Search"><br>
                    <button id="button" type="submit">Enter</button>
                </form>
                <div>
                    <span>
                        <?php
                              echo"<h4 id='output'>"; echo"Song : $songname"; echo"</h4>"; 
                              echo"<h4 id='output'>"; echo"Creator : $creator"; echo"</h4>"; 
                              echo"<h4 id='output'>"; echo"Plays : $plays"; echo"</h4>"; 
                              echo"<h4 id='output'>"; echo"Added: $timeadded"; echo"</h4>"; 
                        
                        ?>
                    </span>
                </div>

            </div>

            <div id="lower">
                <h2>Songs Added</h2>
            </div>


        </div>
    </div>
</body>

</html>