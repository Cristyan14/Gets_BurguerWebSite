<?php

$dbHost = 'localhost:3312';
$dbUsername = 'root';
$dbPassword = 'usbw';
$dbName = 'novo';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo "Erro";
}
else{
    //echo "Deu certro";
}
?>