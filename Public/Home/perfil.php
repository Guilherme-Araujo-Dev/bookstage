<?php
include("../Class/Conexao.php");
$pdo = conectar();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="stylesheet" href="../../CSS/3.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
    <script src="../../JS/button.js"></script>
</head>

<body>
    <?php include("../Class/header.php") ?>
    <main>
    <h5 class="titulo">Bem vindo</h5>
    <img src="../../IMG/Fotosperfil/user.png">
    <h5>Nome de usuario</h5>
    <br>
    <h5>Nome</h5>
    <br>
    <h5>Email</h5>
    <br>
    <h5>Fone</h5>
    <br>
    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

</body>

</html>
