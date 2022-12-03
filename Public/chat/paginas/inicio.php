<?php
include("../../Conexao.php");
$conn = conectar();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../../../css/1.css">
    <link rel="icon" href="../../../imag/logo.jpg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header class="cabecalho">
        <a href="index.php">
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
                            <option class="option10" value="../../romance.php">Rom&acirc;nce</option>
                            <option class="option11" value="../../sobrenatural.php">Sobrenatural</option>
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
        <div class="content">
            <form method="post" enctype="multipart/form-data">
                <label>Usuário</label>
                <p><input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário"></p>

                <label>Senha</label>
                <p><input type="password" name="senha" id="senha" class="form-control" placeholder="************"></p>

                <p><input type="submit" name="Entrar" class="btn btn-primary btn-lg btn-block"></p>
                <input type="hidden" name="env" value="login">
            </form>
        </div>
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
if (isset($_POST['Entrar'])) {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    

    if (empty($usuario) || empty($senha)) {
        echo '<script> alert("Preencha todos os Campos") </script>';
    } else {
        $sql = "SELECT * FROM leitores WHERE usuario = :u and senha = :s";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':u', $usuario);
        $stmt->bindParam(':s', $senha);
        $stmt->execute();
        $resultado = $stmt->fetch();

        if ($stmt->rowCount() > 0) {
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['usuario'] = $resultado['usuario'];

            echo '<meta http-equiv="Refresh" content="0; url=chat.php">';
            
        } else {
            echo "<script> alert('Usuário e/ou Senha Incorreto(s)') </script>";
        }
    }
}

?>