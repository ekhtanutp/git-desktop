<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
</head>
<body>
   

    <table border="1">
        <caption>LIST MEMBER  <a href="member_form_add.php">เพิ่มข้อมูล</a> </caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th>DATE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'condb.php';
            $query =  "select * from tbl_member";
            $result = mysqli_query($condb, $query) or die("Error in sql : $query" .mysqli_error($query)); 
        ?>
            <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['date_save']; ?></td>
                <td>
                    <a href="member_form_edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
                </td>
                <td>
                    <a href="member_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php mysqli_close($condb); ?>
</body>
</html>