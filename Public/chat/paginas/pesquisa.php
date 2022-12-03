<?php
include("../../Conexao.php");
$pdo = conectar();
session_start();
if (isset($_SESSION['usuCon'])) unset($_SESSION['usuCon']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../chat/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/1.css">
    <link rel="stylesheet" href="../../../css/2.css">
    <link rel="stylesheet" href="../../../css/pesquisa.css">
    <link rel="icon" href="../../../imag/logo.jpg">
</head>

<body>
    <header class="cabecalho">
        <a href="../../../index.php">
            <h1 class="logo"></h1>
        </a>
        <button class="bmenu">
            <img src="../../../imag/menu.png">
        </button>
        <nav class="menu">
            <a class="btn"><i>X</i></a>
            <ul>
                <li><a href="index.php">In&iacute;cio</a></li>
                <li class="li"><a href="#">Gen&ecirc;ro:
                        <select id="link" onchange="location = this.value;">
                            <option></option>
                            <option class="option1" value="../../acao.php">A&ccedil;&atilde;o</option>
                            <option class="option2" value="../../aventura.php">Aventura</option>
                            <option class="option3" value="../../comedia.php">Com&eacute;dia</option>
                            <option class="option4" value="../../drama.php">Drama/Trag&eacute;dia</option>
                            <option class="option5" value="../../fabula.php">F&aacute;bula</option>
                            <option class="option6" value="../../fantasia.php">Fantasia</option>
                            <option class="option7" value="../../ficcao.php">Fic&ccedil;&atilde;o</option>
                            <option class="option8" value="../../lgbtqia+.php">LGBTQIA+</option>
                            <option class="option9" value="../../misterio.php">Mist&eacute;rio</option>
                            <option class="option10" value="romance.php">Rom&acirc;nce</option>
                            <option class="option11" value="sobrenatural.php">Sobrenatural</option>
                            <option class="option12" value="../../suspense.php">Suspense</option>
                            <option class="option13" value="../../terror.php">Terror</option>
                            <option class="option14" value="../../horror.php">Horror</option>
                        </select>
                    </a></li>
                <li><a href="../../favoritos.php">Favoritos</a></li>
                <li><a href="../../ja li.php">Ja li</a></li>
                <li><a href="../../queroler.php">Quero ler</a></li>
                <li><a href="../../perfil.php">Perfil</a></li>
            </ul>
        </nav>
    </header>
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
                    <h1 class="product-text"><?php echo $l['usuario']; ?></h1>
                    <p class="product-text">Email: <?php echo $l['email']; ?> </p>
                    <form method="POST">
                        <button class="btnConversa" name="btnConversa" type="submit" value="<?php echo $l['usuario']; ?>"> Bate-Papo </button>
                    </form>
                </li>
                <br>
            <?php } ?>
        </ul>
    </main>
    <footer class="rodape">
        <div>
            <h3> Siga-nos </h3>
            <a href="https://instagram.com/instagram" target="_blank">
                <img class="icone" src="../../../imag/instagram.png">
            </a>
            <a href="https://facebook.com" target="_blank">
                <img class="icone" src="../../../imag/facebook.png">
            </a>
            <a href="https://whatsapp.com" target="_blank">
                <img class="icone" src="../../../imag/whatsapp.png.">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img class="icone" src="../../../imag/twitter.png">
            </a>
        </div>
    </footer>
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