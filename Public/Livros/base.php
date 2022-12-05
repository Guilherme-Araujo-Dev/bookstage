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
    <meta charset="UTF-8">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="stylesheet" href="../../CSS/3.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>

<body>
    <?php include("../Class/header.php"); ?>
    <main>
        <h5 class="titulo"><?php echo $livro['nome']; ?></h5>
        <br><br>
        <div class="sinopse">
            <p>
                <?php echo $livro['descricao'] ?>
            </p>
        </div>
        <div id="imagem" class="borda">
            <img src="../../IMG/livros/<?php echo $livro['capa']; ?>.jpg">
        </div>
        <form method="POST">
            <button class="button" name="btnFavoritos" type="submit">F</button>
            <button class="button" name="btnQuero" type="submit">Q</button>
            <button class="button" name="btnLido">J</button>
        </form>
    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../../JS/button.js"></script>
</body>

</html>

<?php

$sql = "SELECT * FROM livros_leitores WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $_SESSION['idusuario']);
$stmt->execute();

if ($stmt->rowCount() == 0) {
    $date = date('Y-m-d');
    $sql = "INSERT INTO livros_leitores VALUES (null, ?, 'n', 'n', 'n', ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $date);
    $stmt->bindParam(2, $id);
    $stmt->bindParam(3, $_SESSION['idusuario']);
    $stmt->execute();
}

$sql = "SELECT * FROM livros_leitores WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $_SESSION['idusuario']);
$stmt->execute();

$jun = $stmt->fetch();

if (isset($_POST['btnFavoritos'])) {

    if ($jun['favoritos'] == 's') {
        $sql = "UPDATE livros_leitores SET favoritos = 'n' WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";
    } else {
        $sql = "UPDATE livros_leitores SET favoritos = 's' WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $_SESSION['idusuario']);
    $stmt->execute();
}

if (isset($_POST['btnQuero'])) {

    if ($jun['quero_ler'] == 's') {
        $sql = "UPDATE livros_leitores SET quero_ler = 'n' WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";
    } else {
        $sql = "UPDATE livros_leitores SET quero_ler = 's' WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $_SESSION['idusuario']);
    $stmt->execute();
}

if (isset($_POST['btnLido'])) {

    if ($jun['lidos'] == 's') {
        $sql = "UPDATE livros_leitores SET lidos = 'n' WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";
    } else {
        $sql = "UPDATE livros_leitores SET lidos = 's' WHERE livros_idlivros  = ? AND leitores_idleitores  = ?";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $_SESSION['idusuario']);
    $stmt->execute();
}


?>