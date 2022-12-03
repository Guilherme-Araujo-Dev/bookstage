<?php
include("../../Conexao.php");
$conn = conectar();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewpot" content="width=device-width, inicial-scale=1">
	<title>Bookstage</title>
 </head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label>Usuário</label>
        <p><input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário"></p>

        <label>Senha</label>
        <p><input type="password" name="senha" id="senha" class="form-control" placeholder="************"></p>

        <p><input type="submit" name="Entrar" class="btn btn-primary btn-lg btn-block"></p>
    </form>
</body>
</html>   
<?php
    if (isset($_POST['Entrar']) ) {
        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);
        //    echo $senha."/".$usuario;
        
            if (empty($usuario) || empty($senha)) {
                echo "<code>Preencha todos os campos</code>";
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
                    var_dump($_SESSION);
        
                    echo '<meta http-equiv="Refresh" content="1; url=?pagina=usuarios">';
                } else {
                    echo '<code>Usuário ou senha inválidos!<code>';
                }

    }

    }
    ?>









