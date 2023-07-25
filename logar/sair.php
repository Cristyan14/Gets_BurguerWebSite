<?php
    session_start();
        header('Location: login.php');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
?>