<?php 

    session_start();
    echo '<h1>Session </h1>';

    //สร้างตัวแปรให้ Session
    $_SESSION['member_id'] = 1;
    $_SESSION['member_name'] = 'Ekthanut Phanthongpubordee';
    $_SESSION['phone'] = '0812015465';
    $_SESSION['email'] = 'aaa@aaa.com';


    //display session
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
?>