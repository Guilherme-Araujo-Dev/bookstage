<?php

//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'chat');

//Criar a conexão com banco de dados usando o PDO
$conn = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);

//Outras configurações
date_default_timezone_set('America/Sao_Paulo');
$globalData = date("d/m/Y");
$globalHora = date("H:i");
$showNome = false;

if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != null) {
    $nomeAtual = $_SESSION['nome'];
    $usuarioAtual = $_SESSION['usuario'];
    $showNome = true;
}
