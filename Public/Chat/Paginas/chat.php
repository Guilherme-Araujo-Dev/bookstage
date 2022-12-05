<?php
include_once("../../Class/conexao.php");
$conn = conectar();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../../../CSS/1.css">
    <link rel="icon" href="../../../IMG/imag/logo.jpg">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                    <div>
                        <input class="digitar" type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control">
                        <span class="input-group-btn">
                            <input  type="submit" value="&rang;&rang;" class="btn btn-success">
                            <input type="hidden" name="env" value="envMsg" />
                        </span>
                    </div>
                </div>
            </form>
            <?php
            if (!isset($_SESSION['idusuario'])) {
                echo "<meta http-equiv='refresh' content='0; URL=../../Home/login.php'/>";
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

    <script src="../../../JS/button.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
</body>

</html>
</body>

</html>