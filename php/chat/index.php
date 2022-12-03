<?php

function conectar()  {
    $pdo = new PDO('mysql:host=;dbname=BookStage', 'root', '');

    return $pdo;
};
?>
<?php
 echo '<link rel="icon" href="../css/bootstrap.min.css">';
 echo '<link rel="icon" href="../css/style.css">';
session_start();
include_once("settings/settings.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mensagens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php if ($showNome) { ?>
        <p>Bem vindo <code><?php echo $nomeAtual; ?></code></p>
    <?php } ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php
            $dir = "paginas/";
            $ext = ".php";

            if (isset($_GET["pagina"])) {
                $pagina = ($_GET["pagina"]);
            } else {
                $pagina = "inicio";
            }

            if (file_exists($dir . $pagina . $ext)) {
                include($dir . $pagina . $ext);
            } else {
                echo "Pagina não encontrada!";
            }
            ?>
        </div>
    </div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>