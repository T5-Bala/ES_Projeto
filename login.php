<?php

include 'dbconnection.php';

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilizadores WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id_utilizador'];
        $_SESSION['nome'] = $row['nome_utilizador'];
        $_SESSION['nivel'] = $row['nivel_acesso'];
        header('Location: menuadmin.php');
    }else{
        header('Location: signin.php');
    }
}


?>