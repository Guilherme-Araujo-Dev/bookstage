<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../imag/logo.jpg">
</head>

<body>
    <?php include("../Class/header.php") ?>
    <main>
        <div id="imagens">
            <h1 id="Aventura">Aventura</h1>
            <br>
            <a href="../Livros/pedrafilosofal.php">
                <img src="../../IMG/livros/pedrafilosofal.jpg">
            </a>
            <a href="../Livros/jogosvorazes.php">
                <img src="../../IMG/livros/jogosvorazes.jpg">
            </a>
            <a href="../Livros/oladraoderaios.php">
                <img src="../../IMG/livros/oladraoderaios.jpg">
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

</html>