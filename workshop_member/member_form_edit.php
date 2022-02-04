<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form add member</title>
</head>
<body>
    <?php
    // ID ที่ส่งมาแก้ไขจากหน้า member_list
        include 'condb.php';
        $id = $_GET['id'];
        //echo $id; //เช็คว่ารับค่า id ที่ส่งได้จริง ๆ ไหม
        $query = "select * from tbl_member where id = $id";
        $result = mysqli_query($condb, $query) or die("Error in sql : $query" .mysqli_error($query)); 
        $row = mysqli_fetch_array($result);
        //print_r($row);  //เช็ค query ได้

    
    ?>
    <h1>แก้ไขข้อมูลสมาชิก</h1>
    <form action="member_form_edit_db.php" method="post">
        
        ID :
        
        <input type="text" name="id" id="" placeholder="username" required value="<?php echo $row['id']; ?>" readonly><br>
        Username :
        <input type="text" name="username" id="" placeholder="username" required value="<?php echo $row['username']; ?>"><br>
        Password :
        <input type="password" name="password" id="" placeholder="password" required value="<?php echo $row['password']; ?>"><br>
        NAME :
        <input type="text" name="name" id="" placeholder="ชื่อ - นามสกุล" required value="<?php echo $row['name']; ?>"><br>
        PHONE :
        <input type="text" name="phone" id="" placeholder="เบอร์โทรศัพท์ 10 หลัก" required value="<?php echo $row['phone']; ?>"><br>
        EMAIL :
        <input type="email" name="email" id="" placeholder="อีเมลล์" required value="<?php echo $row['email']; ?>"><br>
        <button type="submit">Save</button>


    </form>
</body>
</html>