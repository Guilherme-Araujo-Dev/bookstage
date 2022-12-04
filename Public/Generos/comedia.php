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
                    <h1 id="Comedia">Com&eacute;dia</h1>
                    <br>
            <a href="../Livros/aculpaedasestrelas.php">
                <img src="../../IMG/livros/aculpaedasestrelas.jpg">
            </a>
            <a href="../Livros/diariodeumbanana.php">
                <img src="../../IMG/livros/diariodeumbanana.jpg">
            </a>
            <a href="../Livros/ninguemviraadultodeverdade.php">
                <img src="../../IMG/livros/ninguemviraadultodeverdade.png">
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