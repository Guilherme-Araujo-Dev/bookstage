<?php
include_once("conexao.php");
$pdo = conectar();

$sql = "SELECT * FROM leitores";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$livros = $stmt->fetchAll();


    foreach($livros as $l) {

        echo "<img class='imagem-perfil'  src='https://drive.google.com/drive/folders/1-Af8F3QGc1Sk5H8LOtfSC1h_HlNAbsx-?usp=share_link/" . $l['Foto'] . ".jpg'>" . "<br>";


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