<?php
    include 'condb.php';

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    //ประกาศตัวแปรรับค่าจาก form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    //เช็คข้อมูลซ้ำ
            $query =  "SELECT username FROM tbl_member WHERE username='$username' ";
            $result = mysqli_query($condb, $query) or die("Error in sql : $query" .mysqli_error($query));
            
            //echo 'จำนวนข้อมูลที่พบ '.mysqli_num_rows($result); 
            if(mysqli_num_rows($result) > 0 ){
                //echo 'Username นี้มีผู้ใช้แล้ว';
                echo "<script type='text/javascript'>";
                echo "alert('Username นี้มีผู้ใช้แล้ว');";
                echo "window.location = 'member_form_add_bt4.php';";
                echo "</script>";
            }else{
                //insert into table
                $sql = "INSERT INTO tbl_member
                (
                    username, 
                    password, 
                    name, 
                    phone, 
                    email
                )
                VALUE
                (
                    '$username', 
                    '$password', 
                    '$name', 
                    '$phone', 
                    '$email'
                )";
                
                $result = mysqli_query($condb, $sql) or die("Error in sql : $sql" .mysqli_error($sql)); 
                mysqli_close($condb);

                echo $sql;
                echo '<hr>';

                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Update Successfully');";
                    echo "window.location = 'member_list_bootstrap4.php';";
                    echo "</script>";
                }else{
                    echo "<script type='text/javascript'>";
                    echo "alert('ERROR !!');";
                    echo "window.location = 'member_list_bootstrap4.php';";
                    echo "</script>";
                }
                }

                exit();

    

    

?>