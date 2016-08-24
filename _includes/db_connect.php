<?php
include_once 'config.inc.php';   						

// Conecta ao banco de dados

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

$mysqli->set_charset('utf8');

// Verifica se ocorreu algum erro
if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
?>