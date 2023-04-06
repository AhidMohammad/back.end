<?php

$servername="localhost";
$username="root";
$password="";
$my_db="againproject";

$con=mysqli_connect($servername,$username,$password,$my_db);

if($con)
{
    echo "succesfull";
}
else{
    
    die(mysqli_error($con));
    echo"not sucessfull";
}




?>