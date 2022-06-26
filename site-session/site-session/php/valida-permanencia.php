<?php
    if( ($_SESSION['login-session'] != 'dev') || ($_SESSION['senha-session'] != '123') ){
        header("Location: ../login.php");
    }
?> 