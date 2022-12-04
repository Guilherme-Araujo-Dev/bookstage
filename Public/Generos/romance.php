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
                    <h1 id="Romance">Rom&acirc;nce</h1>
                    <br>
                    <a href="../Livros/aculpaedasestrelas.php">
                        <img src="../../IMG/livros/aculpaedasestrelas.jpg">
                    </a>
                    <a href="../Livros/agarotadinamarquesa.php">
                        <img src="../../IMG/livros/agarotadinamarquesa.jpg">
                    </a>
                    <a href="../Livros/azuleacormaisquente.php">
                        <img src="../../IMG/livros/azuleacormaisquente.jpg">
                    </a>
                    <a href="../Livros/milbeijosdeumgaroto.php">
                        <img src="../../IMG/livros/milbeijosdeumgaroto.jpg">
                    </a>
                    <a href="../Livros/vermelhobrancoesangueazul.php">
                        <img src="../../IMG/livros/vermelhobrancoesangueazul.jpg">
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