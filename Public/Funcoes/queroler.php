<?php
include_once("../Class/conexao.php");
$pdo = conectar();
session_start();

$sql = "SELECT livros_idlivros FROM livros_leitores WHERE quero_ler = 's' AND leitores_idleitores = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $_SESSION['idusuario']);
$stmt->execute();

$livros = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>

<body>
    <?php include("../Class/header.php") ?>
    <main>
        <div class="conteudo">
        <h1 id="Terror">Quero Ler</h1>
        </div>
        <?php include("../Class/funcoes.php"); ?>