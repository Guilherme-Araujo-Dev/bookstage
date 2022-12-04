<?php
include_once("../../Class/conexao.php");
$conn = conectar();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../../../css/1.css">
    <link rel="icon" href="../../../IMG/imag/logo.jpg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header class="cabecalho">
        <a href="index.php">
            <h1 class="logo"></h1>
        </a>
        <button class="bmenu">
            <img src="../../../IMG/imag/menu.png">
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
        <div id="content">
            <div id="lista">

            </div>
            <hr />
            <form id="form-chat" action="" method="POST" enctype="multipart/form-data">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control">
                        <span class="input-group-btn">
                            <input type="submit" value="&rang;&rang;" class="btn btn-success">
                            <input type="hidden" name="env" value="envMsg" />
                        </span>
                    </div>
                </div>
            </form>
            <?php
            include_once("../settings/settings.php");
            if (!isset($_SESSION['idusuario'])) {
                header("Location: ../../login.php");
            }

            if (isset($_POST['env']) && $_POST['env'] == "envMsg") {
                $mensagem = $_POST['mensagem'];
                $id_para = $_SESSION['usuCon'];
                $id_de =  $_SESSION['idusuario'];


                if (empty($mensagem)) {
                    echo "<code>Digite sua mensagem</code>";
                } else {
                    $sql = "INSERT INTO mensagens(id_de, id_para, mensagem) VALUE (:d,:p,:m)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':d', $id_de);
                    $stmt->bindParam(':p', $id_para);
                    $stmt->bindParam(':m', $mensagem);
                    try {
                        $stmt->execute();
                    } catch (PDOException $e) {
                        echo "<code>Erro ao enviar a mensagem.</code>";
                    }
                }
            } ?>
            <div id="chatBox">
                <script>
                    setInterval(function() {
                        $('#chatBox').load("usuarios.php");
                    }, 100)
                    
                </script>
            </div>
            <br><br>
        </div>
    </main>




    <footer class="rodape">
        <div>
            <h3> Siga-nos </h3>
            <a href="https://instagram.com/instagram" target="_blank">
                <img class="icone" src="../../../IMG/imag/instagram.png">
            </a>
            <a href="https://facebook.com" target="_blank">
                <img class="icone" src="../../../IMG/imag/facebook.png">
            </a>
            <a href="https://whatsapp.com" target="_blank">
                <img class="icone" src="../../../IMG/imag/whatsapp.png.">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img class="icone" src="../../../IMG/imag/twitter.png">
            </a>
        </div>
    </footer>

    <script>
        $(".bmenu").click(function() {
            $(".menu").show();
        });
        $(".btn").click(function() {
            $(".menu").hide();
        });
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
</body>

</html>
</body>

</html>