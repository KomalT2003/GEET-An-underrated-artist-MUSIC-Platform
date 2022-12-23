<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $DOB=$_POST['dob'];
    $toa=$_POST['toa'];

    $sql="insert into `account`(name,DOB,typeofaccount,email,password) values ('$username','$DOB','$toa','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"data inserted successfully";
        header('Location: login.php');
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
    <meta author="Yash" content="This is a signup page">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>

<body>

    <form action="get" method="get">

        <div id="signup">
            <p>
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" required>
            </p>

            <p>
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" required>
            </p>

            <p>
                <label for="dob">Date of birth</label><br>
                <input type="date" name="dob" id="dob" required>
            </p>

            <p>
                <label for="toa">Type of Account</label><br>
                <select name="toa" id="toa">
                    <option value="User">User</option>
                    <option value="Creator">Creator</option>
                </select>
            </p>

            <p>
                <label for="password">Password</label><br>
                <input type="text" name="password" id="dob" required>
            </p>
        

        <div id="button">
            <button type="post" formaction="signup.php" formmethod="post" id="submit">Submit</button>
        </div>
        </p>

    </form>

</body>

</html>