<?php
session_start();
include_once('Class/conexao.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../IMG/imag/logo.jpg">
    <link rel="stylesheet" href="../CSS/1.css">
    <title>Bookstage</title>
    <link rel="stylesheet" href="../CSS/style-login.css">
</head>

<body>
    <div class="formulario">
        <form method="POST"><br>
            <fieldset>
                <legend>
                    <h1 class="logo"></h1>
                </legend>
                <br><br>
                <div class="input">
                    <input type="text" name="nomeusu" id="nomeusu" class="inputuser" required="required" minlength="3" maxlength="50" />
                    <label for="nomeusu" class="label">Nome de Usuario ou Email</label><br>
                </div>
                <br><br>
                <div class="input">
                    <input type="password" name="senha" id="senha" class="inputuser" minlength="8" maxlength="20" required="required" /><br>
                    <label for="senha" class="label">Digite a senha</label><br>
                </div>
                <br><br>
                <input type="submit" name="btnSalvar" id="submit" />
                <p>Não possui uma conta?<u> <a href="formulario.php"> Clique aqui!</u></a></p>
            </fieldset>
        </form>
    </div>
</body>

</html>

<?php
$pdo = conectar();
if (isset($_POST['btnSalvar']) && !empty($_POST['nomeusu']) && !empty($_POST['senha'])) {
    echo "Acho";
    $usuario = $_POST['nomeusu'];
    $senha = $_POST['senha'];

    $senha = md5($senha);



    $sql = "SELECT * FROM leitores WHERE (usuario = ? or email = ?) and senha = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $usuario);
    $stmt->bindParam(2, $usuario);
    $stmt->bindParam(3, $senha);
    $stmt->execute();
    $l = $stmt->fetchAll();

    $_SESSION['idusuario'] = $l[0]['idleitores'];

    if ($stmt->rowCount() > 0) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: perfil.php');
    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        //header('Location: login.php');
        echo "<script> alert('Usuário e/ou Senha Incorreto(s)')</script>";
    }
}
?>