<?php
include_once("../../Conexao.php");
$conn = conectar();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../../../css/1.css">
    <link rel="icon" href="../../../imag/logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <div id="content">
            <?php
            $sql = "SELECT * FROM leitores";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() <= 0) {
                echo "Nenhum usuário encontrado";
            } else {
                // $nome    = $row['nome'];
                // $usuario = $row['usuario'];
                // $foto    = $row['foto'];
                
                $sql = 'SELECT * FROM mensagens WHERE (id_de = ? AND id_para = ?) OR (id_para = ? AND id_de = ?)';
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1,  $_SESSION['idusuario']);
                $stmt->bindParam(2,  $_SESSION['usuCon'] );
                $stmt->bindParam(3,  $_SESSION['idusuario']);
                $stmt->bindParam(4,  $_SESSION['usuCon'] );
                
                $stmt->execute();
                $men = $stmt->fetchAll();


                
$i = 1;
                foreach ($men as $m) {
            ?>
                    <table>
                        <tr>
                            <!-- <td><img src="<?php echo $foto; ?>" class="foto-user"></td> -->
                            <?php 
                            if($m['id_de'] == $_SESSION['idusuario']) { ?>
                                <td><b><?php echo $_SESSION['usuario'] . ": " . $m['mensagem']; ?></b></td>
                                <?php } else {?>
                                <td><b><?php echo $_SESSION['nomeUsuCon'] . ": " . $m['mensagem']; ?></b></td>
                                <?php }

                            ?>
                        </tr>
                    </table>
                    <hr />
            <?php }
            } ?>
        </div>
    </main>
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