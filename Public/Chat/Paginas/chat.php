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
<?php include("../../Class/header-chat.php") ?>
    <main>
        <div id="content">
            <div id="lista">

            </div>
            <br> 
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




    <?php include("../../Class/footer-chat.php") ?>

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