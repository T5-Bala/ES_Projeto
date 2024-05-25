<?php

session_start();

if(isset($_SESSION['nivel'])){
    if($_SESSION['nivel'] == 1){
        header('Location: menuadmin.php');
    }else if($_SESSION['nivel'] == 2){
        header('Location: menuGestorEducativo.php');
    }
    else if($_SESSION['nivel'] == 3){
        header('Location: menuDocente.php');
    }
}



?>