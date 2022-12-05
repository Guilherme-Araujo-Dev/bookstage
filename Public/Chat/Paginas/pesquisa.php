<?php
include("../../Class/Conexao.php");
$pdo = conectar();
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../../CSS/1.css">
    <link rel="stylesheet" href="../../../CSS/2.css">
    <link rel="icon" href="../../../IMG/imag/logo.jpg">
</head>

<body>
<?php include("../../Class/header-chat.php") ?>
    <main>
        <!--BARRA DE PESQUISA-->
        <div class="corpo">
            <div class="divBusca">
                <form method="POST">
                    <input type="text" class="txtBusca" id="busca" name="busca" placeholder="Buscar..." />
                    <button class="btnBusca" name="btnBusca" type="submit">Buscar</button>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['btnBusca'])) {
            $busca    = isset($_POST['busca']) ? $_POST['busca'] : ' ';
            $sql = "SELECT * FROM leitores WHERE idleitores != ? AND usuario LIKE ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $_SESSION['idusuario']);
            $buscaGeral = '%' . $busca . '%';
            $stmt->bindParam(2, $buscaGeral);
        } else {
            $sql = "SELECT * FROM leitores WHERE idleitores != ? LIMIT 10";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $_SESSION['idusuario']);
        }
        // preparando o sql para não aceitar sql injection
        $stmt->execute();

        // pegando todos os dados da tabela
        $leitores = $stmt->fetchAll();
        ?>

        <br><br><br><br>

        <ul class="usuarios">
            <?php foreach ($leitores as $l) {
                $l['foto'] = null ? $l['foto'] : "user.png";
            ?>
                <li class="usuario">
                    <img src="../../../img/fotosPerfil/<?php echo $l['foto']; ?>">
                    <h4 class="product-text"><?php echo $l['usuario']; ?></h4>
                    <p class="product-text">Email: <?php echo $l['email']; ?> </p>
                    <form method="POST">
                        <button class="btnConversa" name="btnConversa" type="submit" value="<?php echo $l['usuario']; ?>"> Bate-Papo </button>
                    </form>
                </li>
                <br>
            <?php } ?>
        </ul>
    </main>
    <?php include("../../Class/footer-chat.php") ?>
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
if (isset($_POST['btnConversa'])) {
    $usuario = $_POST['btnConversa'];

    $sql = "SELECT * FROM leitores WHERE usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $usuario);
    $stmt->execute();

    $usuario = $stmt->fetchAll();

    $_SESSION['usuCon'] = $usuario[0]['idleitores'];
    $_SESSION['nomeUsuCon'] = $usuario[0]['usuario'];

    echo "<meta http-equiv='refresh' content='0; URL=chat.php'>";
}

?>