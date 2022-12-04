<!DOCTYPE html>
<html>
<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <meta charset = "UTF-8">
	<title>Bookstage</title>
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="stylesheet" href="../../CSS/3.css">
    <link rel="icon" href="../../IMG/imag/logo.jpg">
</head>
<body>
<?php include("../Class/header.php") ?>
        <main>
            <h1 class="titulo">Jogos vorazes</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    Quando Katniss Everdeen, de 16 anos, decide participar dos Jogos Vorazes para poupar a irmã mais nova, causando grande comoção no país, ela sabe que essa pode ser a sua sentença de morte. Mas a jovem usa toda a sua habilidade de caça e sobrevivência ao ar livre para se manter viva. As reviravoltas do jogo e as dificuldades enfrentadas pela protagonista levam os leitores a sofrer junto com ela, enquanto descobrem um pouco sobre seu passado e seu relacionamento com Peeta Mellark, o outro tributo enviado pelo Distrito 12 para lutar nos Jogos Vorazes.


                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="../../IMG/livros/jogosvorazes.jpg">
            </div>
            <button class="button">F</button>
            <button class="button">Q</button>
            <button class="button">j</button>
        </main>
        <?php include("../Class/footer.php") ?>
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