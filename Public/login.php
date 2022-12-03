<?php
    session_start();
    include_once('Conexao.php');
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../imag/logo.jpg">
        <link rel="stylesheet" href="../css/1.css">
        <title>Bookstage</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: url(../imag/fundo.jpg);
            }
            .formulario{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.8);
                padding: 15px;
                border-radius: 15px;
                width: 35%;
                color: white;
                }
                .input{
                    position: relative;
                }
                .inputuser{
                    background: none;
                    border: none;
                    border-bottom: 1px solid white;
                    outline: none;
                    color: white;
                    font-size: 15px;
                    width: 100%;
                    letter-spacing: 2px;
                }
                .label{ 
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    pointer-events: none;
                    transition:.5s;
                }
                .inputuser:focus~.label,
                .inputuser:valid~.label{
                    top: -20px;
                    font-size: 12px;
                }
                button{
                    background-color:#5b4b41;
                    border: none;
                    padding: 15px;
                    width: 100%;
                    border-radius: 10px;
                    color: white;
                    font-size: 15px;
                    
                }
                button:hover{
                    background-color: white;
                    color: black;
                    cursor: pointer;
                }
        fieldset{
            border: 3px solid#5b4b41;
        }
        legend{
                    border: 1px #5b4b41;
                    padding: 10px;
                    text-align: center;
                    background-color: #5b4b41;
                    border-radius: 8px;
                    color: black;
                }
                #submit{
                    background-color:#5b4b41;
                    width: 100%;
                    border: none;
                    padding: 15px;
                    color: white;
                    font-size: 15px;
                    cursor:pointer;
                    border-radius: 25px;
                }
    </style>
</head>
<body>
    <div class="formulario">
        <form method="POST"><br>
        <fieldset>
            <legend><h1 class="logo"></h1></legend>
            <br><br>
            <div class="input">
                <input type="text" name="nomeusu" id="nomeusu" class="inputuser" required="required"  minlength="3" maxlength="50" />
                <label for="nomeusu" class="label">Nome de Usuario ou Email</label><br>
            </div>
            <br><br>
            <div class="input">
                <input type="password" name="senha" id="senha" class="inputuser" minlength="8"  maxlength="20" required="required"/><br>
                <label for="senha" class="label">Digite a senha</label><br>
            </div>
            <br><br>
            <input type="submit" name="btnSalvar" id="submit"/>
        </fieldset>
    </form>
</div>
</body>
</html>

<?php
    $pdo = conectar();
    if(isset($_POST['btnSalvar']) && !empty($_POST['nomeusu']) && !empty($_POST['senha']))
    {
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
        $l= $stmt->fetchAll();

        $_SESSION['idusuario']=$l[0]['idleitores'];
    
        if($stmt->rowCount() > 0)
            {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;
                echo "<script> alert(" . $usuario . ")</script>";
                header('Location: ../index.php');
            }
            else
            {
                echo "<script> alert(" . $usuario . ")</script>";
                unset($_SESSION['usuario']);
                unset($_SESSION['senha']);
                //header('Location: login.php');
                echo "login nâo efetuado";
        }
    }
?>