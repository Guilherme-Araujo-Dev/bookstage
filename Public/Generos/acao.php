<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../imag/logo.jpg">
</head>

<body>
<?php include("../Class/header.php") ?>
    <main>
        <div id="imagens">
            <h1 id="Acao"><b>A&ccedil;&atilde;o</b></h1>
            <br>
            <a href="../Livros/divergente.php">
                <img src="../../IMG/livros/divergente.jpg">
            </a>
            <a href="../Livros/jogosvorazes.php">
                <img src="../../IMG/livros/jogosvorazes.jpg">
            </a>
            <a href="../Livros/origem.php">
                <img src="../../IMG/livros/origem.jpg">
            </a>
        </div>
    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(".bmenu").click(function() {
            $(".menu").show();
        });
        $(".btn").click(function() {
            $(".menu").hide();
        });
    </script>
</body>

</html>';