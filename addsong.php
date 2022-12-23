<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $name=$_POST['name'];
    $genre=$_POST['genre'];
    $duration=$_POST['duration'];
    $typeofrelease=$_POST['typeofrelease'];

    session_start();
    $c_id=$_SESSION['ac_id'];
    
    

    $sql="insert into `music`(c_id,songname,duration,genre,typeofrelease) values ('$c_id','$name','$duration','$genre','$typeofrelease')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"data inserted successfully";
        $_SESSION['songname']=$name;
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
    <link rel="stylesheet" href="addsong.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Add A New Song</title>
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
            <div id="title">
                <h1>Add A Song</h1>
            </div>
            <div id="sentence">
                The content you want to upload:
            </div>
            <br>
            <div>
            <form action="addsong.php" id="tor" class="input" method="post">
                <label for="tor"><b>Type Of Release:</b></label>
                    <br>
                    <input type="text" name="typeofrelease">
                    <br>
                    <br>

                <label for="name"><b>Name of the Song:</b></label>
                <br>
                    <input type="text" placeholder="Nameofsong" name="name">
                    <br>
                <br>
                <label for="duration"><b>Duration</b></label><br>
                    <input type="time" style="border: none;" name="duration">
                <br>
                <br>
                <label for="genre"><b>Genre</b></label>
                    <input type="text" style="border: none;" name="genre">
                <br>
                <button type="submit" id="paybutton" class="poppins">Submit</button>
            </form> 
            </div>

            <div>
                <label for=""><b>Drop your file below:</b></label>
                <form action="" id="audio" class="input">
                    <input type="file">
                </form>
            </div>
        </div>
    </div>
</body>
</html>