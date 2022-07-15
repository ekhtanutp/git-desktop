<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_test";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        printf("เชื่อต่อฐานข้อมูลไม่ได้เนื่องจาก: %s\n", mysqli_connect_error());
        exit();
    }
?>