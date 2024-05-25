<?php

include 'dbconnection.php';

if(isset($_POST['data_nasc']) &&isset($_POST['idade']) &&isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $data_nasc = $_POST['data_nasc'];

    $sql = "INSERT INTO pedidos_registo (nome, email, password, idade, data_nasc) VALUES ('$nome', '$email', '$password', '$idade', '$data_nasc')";
    $result = $conn->query($sql);

    if($result){
        echo "Registo efetuado com sucesso, aguarde até o administrador o aceitar!";
        header('Location: index.php');
    }else{
        echo "Erro ao registar!";
        header('Location: index.php');
    }
}


?>