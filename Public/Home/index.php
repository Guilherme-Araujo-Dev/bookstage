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
</head>

<body>
    <?php include("../Class/header.php");
    /*
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../IMG/teste1.jpg" class="d-block w-100" alt="teste">
                </div>
                <div class="carousel-item">
                    <img src="../../IMG/teste2.jpg" class="d-block w-100" alt="teste">
                </div>
                <div class="carousel-item">
                    <img src="../../IMG/teste3.jpg" class="d-block w-100" alt="teste">
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
    */
    include("../Class/footer.php"); ?>
    <script>
        
        $("bmenu").click(function() {
            $(".menu").show();
        });
        $(".btn1").click(function() {
            $(".menu").hide();
        });
    </script>
</body>

</html>