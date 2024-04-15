<?php

$host = 'localhost';
$dbName = 'isf_db';
$username = 'root';
$password = '';


$connect = mysqli_connect($host, $username, $password, $dbName);

if(!$connect){
    die('Connection failed: '.mysqli_connect_error());
}



?>