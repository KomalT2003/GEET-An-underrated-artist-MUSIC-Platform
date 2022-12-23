
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select * from `account` where name='$username' and password='$password' ";
    $result=mysqli_query($con,$sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            echo "Login successful";
            $sql="Select * from `account` where typeofaccount='Creator' and name='$username' ";
            $resval=mysqli_query($con,$sql);
            if($resval){
                $num=mysqli_num_rows($resval);  
                if($num>0){
                    echo"CREATOR";
                    $rs=mysqli_fetch_array($resval);
                    $id=$rs['ac_id'];
                    session_start();
                    $_SESSION['username']=$username;
                    $_SESSION['ac_id']=$id;
                    header('Location: creatorhome.php');
                }
                else{
                    echo"User";
                    $sql="Select * from `account` where typeofaccount='User' and name='$username'";
                    $result=mysqli_query($con,$sql);
                    $rs=mysqli_fetch_array($result);
                    $id=$rs['ac_id'];
                    session_start();
                    $_SESSION['username']=$username;
                    $_SESSION['ac_id']=$id;
                    echo"$id";
                    header("Location: home.php");
                }
            }
        }
        else{
           echo "Login not possible...signup";
           header("Location: signup.php");
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

</head>

<body>

    <div id="login">
        <img id="geet" src="geetlogo.png" alt="geet" width="200px" height="200px">
        <form method="post" action="login.php"> 
        <p>
            <label for="user">Username</label>
            <input type="text" name="username" id="user" required>
        </p>
        <p>
            <label for="mail">Email</label>
            <input type="email" name="email" id="mail" Fequired>
        </p>
        <p>
            <label for="mail">Password</label>
            <input type="text" name="password" id="mail" Fequired>
        </p>



        <div id="btcont">
            <button type="submit" id="btn">Submit</button>
        </div>
</form>
    </div>
</body>

</html>