<?php 
    include 'connect.php'; 
    session_start();
    $username=$_SESSION['username'];
    $c_id=$_SESSION['ac_id'];

    $sql="select * from music where c_id='$c_id' and plays in ( select max(plays) from music where c_id='$c_id') ";
    $result=mysqli_query($con,$sql);
    $res=mysqli_fetch_array($result);
    $mostplayed=$res['plays'];
    $mostplayedsong=$res['songname'];
    echo"$mostplayed";

    $sql="select * from music where c_id='$c_id' and timeadded in (select max(timeadded) from music where c_id='$c_id')";
    $result3=mysqli_query($con,$sql);
    $res3=mysqli_fetch_array($result3);
    $recentlyadded=$res3['timeadded'];
    $recentlyaddedsong=$res3['songname'];
    echo"$recentlyadded";
    
    $sql="Select * from account where ac_id='$c_id'";
    $result2=mysqli_query($con,$sql);
    $res2=mysqli_fetch_array($result2);
    $followers=$res2['followers'];
    echo"$followers";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creatorprofile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Your Profile</title>
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
            <div id="title"><h1>Profile</h1></div>
            <br>
            <div>
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="whenchaimettoast" width="200px" height="200px">
            </div>
            <br>
            <h1><?php echo"$username"?></h1>
            <div class="stats">
                <h3>Most Played Song</h3>
            </div>
            <div>
            <div id="songsuploaded">
                <span id="name">
                    <?php 
                        echo"$mostplayedsong---------------------------------------$mostplayed";
                    ?>
                </span>
                </div>
                <br>
            </div>

            <div class="stats">
                <h3>Recently Added</h3>
            </div>

            <div>
            <div id="songsuploaded">
                <span id="name">
                    <?php 
                        echo"$recentlyaddedsong-------------------------------------$recentlyadded";
                    ?>
                </span>
                </div>
                <br>
            </div>

            <div class="stats">
                <h3>Followers</h3>
            </div>

            <div>
            <div id="songsuploaded">
                <span id="name">
                    <?php 
                        echo"$followers";
                    ?>
                </span>
                </div>
                <br>
            </div>
        </div>
    </div>
</body>
</html>