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
            <th>Name</th>
            <th>Capacity</th>
            <th>Action</th>
        </tr>
        <?php
        include 'connect1.php';
        $sql = "SELECT * FROM student";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            foreach ($result as $row) {
        ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['capacity']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>
 