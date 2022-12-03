
<?php
session_start();
include_once("Conexao.php");
$pdo = conectar();

$sql = "SELECT * FROM livros";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$livros = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style-livro.css">
    <title>Livros</title>
</head>
<body>

    <?php
    foreach($livros as $l) {
        echo "Livro: " . $l['nome'] . "<br>";
        echo "<img class='livros-capa'  src='img/" . $l['capa'] . ".jpg'>" . "<br>";


    }
    ?>
</body>
</html>
Conexao:
<?php

function conectar()  {
    $pdo = new PDO('mysql:host=;dbname=BookStage', 'root', '');

    return $pdo;
};