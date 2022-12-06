<?php
include("../Class/Conexao.php");
$pdo = conectar();
session_start();

$sql = "SELECT * FROM leitores WHERE idleitores = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $_SESSION['idusuario']);
$stmt->execute();

$usuario = $stmt->fetch();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="stylesheet" href="../../CSS/3.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>

<body>
    <?php include("../Class/header.php") ?>
    <main>
        <h5 class="titulo">Bem vindo</h5>
        <br>
        <div class="informacoes">
            <h5>Nome de Usuário: <p><?php echo $usuario['usuario']; ?></p></h5>
            
            <h5>Nome: <p><?php echo $usuario['nome']; ?></p></h5>
            
            <h5>E-mail: <p><?php echo $usuario['email']; ?></p></h5>
            
            <h5>Fone: <p><?php echo $usuario['telefone']; ?></p></h5>

            <h5>Sexo: <p><?php 
            if($usuario['sexo'] == 'F') echo "Feminino";
            else if($usuario['sexo'] == 'M') echo "Masculino";
            else echo "Outro";
            ?></p></h5>
            
        </div>
        <div id="imagem1" class="borda">
            <img src="../../IMG/fotosPerfil/user1.png">
        </div>
    </main>
    <?php include("../Class/footer.php") ?>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../../JS/button.js"></script>

</body>

</html>