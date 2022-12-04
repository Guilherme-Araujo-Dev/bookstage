<?php
include_once("../Class/conexao.php");
$pdo = conectar();
session_start();
$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE idlivros = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();

$livro = $stmt->fetch();

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <meta charset = "UTF-8">
	<title>Bookstage</title>
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="stylesheet" href="../../CSS/3.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>
<body>
<?php include("../Class/header.php"); ?>
        <main>
            <h1 class="titulo"><?php echo $livro['nome']; ?></h1>
            <br><br>
            <div class="sinopse">
                <p>
                    <?php echo $livro['descricao'] ?>
                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="../../IMG/livros/<?php echo $livro['capa']; ?>.jpg">
            </div>
            <button class="button">F</button>
            <button class="button">Q</button>
            <button class="button">j</button>
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