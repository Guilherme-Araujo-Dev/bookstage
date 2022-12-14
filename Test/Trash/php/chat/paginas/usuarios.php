<!DOCTYPE html>
<html>
<head>
<meta name="viewpot" content="width=device-width, inicial-scale=1">
	<title>Bookstage</title>
    <link rel="stylesheet" href="../../../css/1.css">
    <link rel="icon" href="../../../imag/logo.jpg">
</head>
<body>
	<header class="cabecalho">
    <a href="index.php"><h1 class="logo"></h1></a>
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
<div id="content">
    <?php
     echo '<link rel="icon" href="../css/bootstrap.min.css">';
     echo '<link rel="icon" href="../css/style.css">';
    $sql = "SELECT * FROM usuarios";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() <= 0) {
        echo "Nenhum usu??rio encontrado";
    } else {
        while ($row = $stmt->fetch()) {
            $nome    = $row['nome'];
            $usuario = $row['usuario'];
            $foto    = $row['foto'];
    ?>
            <table>
                <tr>
                    <td><img src="<?php echo $foto; ?>" class="foto-user"></td>
                    <td><b><?php echo $nome; ?></b></td>
                    <td><a href="?pagina=chat&usuario=<?php echo $usuario; ?>" class="btn btn-info">Iniciar</a></td>
                </tr>
            </table>
            <hr />
    <?php }
    } ?>
</div>
</main>
        <footer class="rodape">
        <div>
                    <h3> Siga-nos </h3>
                    <a  href="https://instagram.com/instagram" target="_blank">
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
    $(".bmenu").click(function(){
        $(".menu").show();
    });
    $(".btn").click(function(){
        $(".menu").hide();
    });
</script>
</body>
</html>   