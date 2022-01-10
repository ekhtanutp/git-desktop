<?php
    include 'condb.php';

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    //exit;

    //ประกาศตัวแปรรับค่าจาก form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    
    //update data into table

    $sql = "update tbl_member set
    
    username='$username',
    password='$password', 
    name='$name',
    phone='$phone', 
    email='$email'
    where id = $id
    ";
    
    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql" .mysqli_error($sql)); 
    mysqli_close($condb);

    // echo $sql;
    // echo '<hr>';

    if($result){

        echo "<script type='text/javascript'>";
        echo "alert('Update Successfully');";
        echo "window.location = 'member_list.php';";
        echo "</script>";

    }else{
        echo "<script type='text/javascript'>";
        echo "alert('Error !!');";
        echo "window.location = 'member_list.php';";
        echo "</script>";
    }

?>