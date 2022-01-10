<?php
    $condb = mysqli_connect("localhost","root","","workshop_crud_member") or die("Error : ".mysqli_error($condb));

    //set utf8
    mysqli_query($condb,"SET NAMES 'utf8' ");
    //set timezone
    date_default_timezone_set('Asia/Bangkok');

    //echo date('Y-m-d H:i:s');
?>