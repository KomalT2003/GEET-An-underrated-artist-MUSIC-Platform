<?php
$HOSTNAME='localhost';
$USERNAME='komal';
$PASSWORD='122chandrama';
$DATABASE='geet';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
    echo "Connection Succesful";
}
else{
    die(mysqli_error($con));    
}
?>