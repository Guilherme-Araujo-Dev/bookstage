<?php
include_once("../Class/conexao.php");
$pdo = conectar();
session_start();

$sql = "SELECT * FROM livros WHERE generos LIKE '%terror%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$livros = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>

<body>
    <?php include("../Class/header.php") ?>
    <main>
        <div id="imagens">
            <h5 id="Terror">Terror</h5>
            <br>
            <?php foreach ($livros as $l) { ?>
                <button class="btnLivros" name="btnLivros" type="submit" onclick="window.location.href = '../Livros/base.php?id=<?php echo $l['idlivros']; ?>'">
                    <img src="../../IMG/livros/<?php echo $l['capa']; ?>.jpg">
                </button>
            <?php } ?>
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

<?php
if (isset($_POST['btnLivros'])) {
    $_SESSION['livro'] = $_POST['btnLivros'];
    /*onclick="window.location.href = '../Livros/<?php echo $l['capa']; ?>.php "*/
}
?>