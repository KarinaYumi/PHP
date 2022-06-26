<?php
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if( ($login == 'dev') && ($senha == '123') ){

        header("Location: index-restrita.php");
        session_start(); 
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
    }
    else{
        header("Location: ../login.php");
    }

?>