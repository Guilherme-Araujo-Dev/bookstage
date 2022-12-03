
<?php
include("Conexao.php");
$pdo = conectar();

?>

<?php
if (isset($_POST['btnSalvar'])) {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    $nomeusu = $_POST['nomeusu'];
    

    $sql = "SELECT * FROM leitores WHERE usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $nomeusu);
    $stmt->execute();
    
    $senha = md5($senha);
    
    if ($stmt->rowCount() == 0) {
        $stmt = $pdo->prepare("INSERT INTO leitores(nome, data_nasc, telefone, email, sexo, senha, usuario)
        VALUES (?, ?, ?, ?, ?, ?, ?)");
    
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $data_nascimento);
        $stmt->bindParam(3, $telefone);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $genero);
        $stmt->bindParam(6, $senha);
        $stmt->bindParam(7, $nomeusu);
        
        try {
            $stmt->execute();
            echo "<script> alert('Você foi cadastrado com sucesso') </script>";
            echo "<meta http-equiv='refresh' content='0; URL=login.php'/>";
        }
        catch(Exception $e)
        {
            echo "<script> alert('Desculpe, ocorreu uma falha inesperada') </script>";
        }

    }
    else
    {
        echo "<script> alert('Já existe um usuário com esse nome') </script>";
    }

}
?>