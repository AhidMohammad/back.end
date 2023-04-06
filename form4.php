<?php

include 'connect1.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$sallary=$_POST['sallary'];


$sql="INSERT INTO `teachers` (`id`, `name`, `address`, `email`, `sallary`) VALUES ( '','$name', '$address','$email','$sallary');";

$result=mysqli_query($con,$sql);

if($result)
{
    echo"sucessfull";
}
else{
    echo"not sucess";
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

Name:<input type="text" name="name" id="name"><br>

address:<input type="text" name="address" id="address"><br>
email:<input type="email" name="email" id="email"><br>
sallary:<input type="number" name="sallary" id="sallary"><br>



<button type="submit" class="btn-btn-primary" name="submit">submit </button>


</form>
</body>
</html>