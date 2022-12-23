<?php 
    include 'connect.php'; 
    session_start();
    $cid=$_SESSION['ac_id'];
                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creatordash.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Your DashBoard</title>
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
            <div id="tile">
                <h1>DashBoard</h1>
            </div>
            <div id="sentence">
                <p>The content that you have uploaded so far:</p>
                <br>
            </div>
            <div id="when">
                <h3>Songs you have uploaded</h3>
            </div>
            <br>
            <?php
            $sql="select * from music where c_id='$cid'";
            $result=mysqli_query($con,$sql);
            
            while($res=mysqli_fetch_assoc($result)){
                $nameofsong=$res['songname'];
                $plays=$res['plays'];

                echo"<div id='songsuploaded'>
                <span id='name'>";
                    echo"$nameofsong                                                          ";
                echo"</span>";
                echo"<span id='noofplays'>";
                echo"$plays plays";
                echo"</span>
                </div>";
                echo"<br>";
            }
            ?>

        </div>
    </div>
</body>
</html>