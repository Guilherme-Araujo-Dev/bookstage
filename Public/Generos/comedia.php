<?php
include_once("../Class/conexao.php");
$pdo = conectar();
session_start();

$sql = "SELECT * FROM livros WHERE generos LIKE '%comedia%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$livros = $stmt->fetchAll();

?>
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
            <?php foreach($livros as $l) { ?>
            <a href="../Livros/<?php echo $l['capa'] ?>.php">
                <img src="../../IMG/livros/<?php echo $l['capa'] ?>.jpg">
            </a>
            <?php } ?>
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