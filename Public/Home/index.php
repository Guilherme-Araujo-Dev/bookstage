<?php
include_once("../Class/conexao.php");
$pdo = conectar();
session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
    <script src="../../JS/button.js"></script>
</head>

<body>
    <?php include("../Class/header.php"); ?>
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="../Livros/base.php?id=1">
                        <img src="../../IMG/livros/acidadedosfantasmas.jpg" class="carrosel" alt="teste">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="../Livros/base.php?id=21">
                        <img src="../../IMG/livros/oladraoderaios.jpg" class="carrosel" alt="teste">
                    </a>
                </div>
                <div class="carousel-item">
                <a href="../Livros/base.php?id=2">
                <img src="../../IMG/livros/aculpaedasestrelas.jpg" class="carrosel" alt="teste">
                    </a>
                    
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../../JS/button.js"></script>
</body>

</html>