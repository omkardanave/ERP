<?php
    require 'Config.php';
    $mysqli = new mysqli($host, $username, $password, $database);
    if($mysqli->connect_errno ) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
     }
     printf('Connected successfully.<br />');
?>