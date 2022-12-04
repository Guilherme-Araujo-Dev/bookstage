
<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>

<body>
    <?php include("../Class/header.php") ?>
    <main>
        <div class="conteudo">
            Favoritos
        </div>

        <div class="livros" id="imagens">
            <?php foreach($livros as $l) { 
                $sql = "SELECT * FROM livros WHERE idlivros = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1, $l['livros_idlivros']);
                $stmt->execute();

                $livro = $stmt->fetch(); ?>

                <img src="../../IMG/livros/<?php echo $livro['capa']; ?>.jpg">


            <?php } ?>
                
        </div>

    </main>
    <?php include("../Class/footer.php") ?>
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
