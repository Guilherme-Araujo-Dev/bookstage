<?php
session_start();
//Criar a conexão com banco de dados usando o PDO
$conn = new PDO('mysql:host=;dbname=bookstage', 'root', '');

//Outras configurações
date_default_timezone_set('America/Sao_Paulo');
$globalData = date("d/m/Y");
$globalHora = date("H:i");
$showNome = false;

if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != null) {
    $nomeAtual = 'guilherme';
    $idusuario = $_SESSION['idusuario'];
    $showNome = true;
}
