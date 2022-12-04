<!DOCTYPE html>
<html>
<head>
	<title>Bookstage</title>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../imag/logo.jpg">
</head>
<body>
<?php include("../Class/header.php") ?>
            <main>
                <div id="imagens">
            <h1 id="Fabula">F&aacute;bula</h1>
            <br>
            <a href="../Livros/esopofabulascompletas.php">
                <img src="../../IMG/livros/esopofabulascompletas.jpg">
            </a>
            <a href="../Livros/fabulasdelafontaine.php">
                <img src="../../IMG/livros/fabulasdelafontaine.jpg">
            </a>
            <a href="../Livros/fabulasdemonteirolobato.php">
                <img src="../../IMG/livros/fabulasdemonteirolobato.jpg">
            </a>
                 </div>
            </main>
            <?php include("../Class/footer.php") ?>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    $(".bmenu").click(function(){
        $(".menu").show();
    });
    $(".btn").click(function(){
        $(".menu").hide();
    });
</script>
</body>
</html>