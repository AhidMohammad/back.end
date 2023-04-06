

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userlist</title>
</head>
<body>
<table border="2">
    <tr>
        <th>name</th>
        <th>address</th>
        <th>email</th>
        <th>sallary</th>
      
    </tr>
<?php
include'connect1.php';
$sql="SELECT * FROM teachers";
$result=$con->query($sql);


if($result->num_rows>0)
{
    foreach($result as $row){
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['sallary']; ?></td>

<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
<td class="editbtn"><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
    <?php
}  
}

?>
</table>
</body>
</html>
