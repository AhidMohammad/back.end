<?php

include 'connect1.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$capacity=$_POST['capacity'];


$sql="INSERT INTO `student` (`id`, `name`, `capacity`) VALUES ( '','$name', '$capacity');";

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

capacity:<input type="text" name="capacity" id="email"><br>



<button type="submit" class="btn-btn-primary" name="submit">submit </button>


</form>
</body>
</html>