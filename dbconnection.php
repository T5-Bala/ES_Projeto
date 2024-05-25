<?php

$host = 'localhost';
$dbName = 'isf_db';
$username = 'root';
$password = '';


$conn = mysqli_connect($host, $username, $password, $dbName);

if(!$conn){
    die('Connection failed: '.mysqli_connect_error());
}



?>