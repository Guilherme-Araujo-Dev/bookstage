<?php
include_once("../Class/conexao.php");
$pdo = conectar();
session_start();

$sql = "SELECT livros_idlivros FROM livros_leitores WHERE favoritos = 's' AND leitores_idleitores = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $_SESSION['idusuario']);
$stmt->execute();

$livros = $stmt->fetchAll();

include("../Class/funcoes.php");

?>