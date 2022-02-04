<?php
     include 'condb.php';

    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';

    // echo '<hr>';

    // echo '<pre>';
    // var_dump($_GET);
    // echo '</pre>';

    // exit;

    //ประกาศตัวแปรรับค่าจาก url $_GET
    $id = $_GET['id'];
    
    //Delete data in table

    $sql = "DELETE FROM tbl_member Where id = $id";
    
    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql" .mysqli_error($sql)); 
    mysqli_close($condb);

    // echo $sql;
    // echo '<hr>';

    if($result){

        echo "<script type='text/javascript'>";
        //echo "alert('Update Successfully');";
        echo "window.location = 'member_list.php';";
        echo "</script>";

    }else{
        echo "<script type='text/javascript'>";
        echo "alert('Error !!');";
        echo "window.location = 'member_list.php';";
        echo "</script>";
    }

?>