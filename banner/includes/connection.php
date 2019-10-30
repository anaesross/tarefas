<?php
    header("Content-type: text/html; charset=utf-8"); 

    $host = 'mysql:host=localhost;dbname=escola;port=3307';
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $user = 'root';
    $pass = '';
    $db = new PDO($host, $user, $pass);    
?>