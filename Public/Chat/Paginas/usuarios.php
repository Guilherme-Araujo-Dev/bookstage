<?php
include_once("../../Class/conexao.php");
$conn = conectar();
?>

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
        $stmt->bindParam(2,  $_SESSION['usuCon']);
        $stmt->bindParam(3,  $_SESSION['idusuario']);
        $stmt->bindParam(4,  $_SESSION['usuCon']);
        
        $stmt->execute();
        $men = $stmt->fetchAll();
        
        foreach ($men as $m) {
            ?>
            <table>
                <tr>
                    <!-- <td><img src="<?php echo $foto; ?>" class="foto-user"></td> -->
                    <?php
                    if ($m['id_de'] == $_SESSION['idusuario']) { ?>
                        <td> <b>Você:</b> <?php echo $m['mensagem']; ?></td>
                    <?php } else { ?>
                        <td><b><?php echo $_SESSION['nomeUsuCon'] . ":</b> " . $m['mensagem']; ?></td>
                    <?php }
                    ?>
                </tr>
            </table>
            <hr />
    <?php }
    } ?>
</div>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    $(".bmenu").click(function() {
        $(".menu").show();
    });
    $(".btn").click(function() {
        $(".menu").hide();
    });
</script>