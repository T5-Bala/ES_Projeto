<?php
session_start();

if(isset($_SESSION['nivel'])){
    session_destroy();
    header('Location: index.php');
}


?>