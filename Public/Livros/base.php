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
            <button class="button" name="btnFavoritos" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg></button>
            <button class="button" name="btnQuero" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                </svg></button>
            <button class="button" name="btnLido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                </svg></button>
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