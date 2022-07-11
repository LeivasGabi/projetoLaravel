<?php

$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'projetolaravel';

$conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

// if($conexao->connect_errno) {
//     echo "erro";
// }
// else {
//     echo "funciona";
// }
?>