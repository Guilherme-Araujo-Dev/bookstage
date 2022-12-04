<?php
echo '<!DOCTYPE html>
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
	<header class="cabecalho">
    <a href="../../index.php"><h1 class="logo"></h1></a>
            <button class="bmenu">
                <img src="../../IMG/imag/menu.png">
            </button>
            <nav class="menu"> 
                <a class="btn"><i>X</i></a>
            <ul>
                <li><a href="../../index.php">In&iacute;cio</a></li>
                <li class="li"><a href="#"> Gen&ecirc;ro: 
                <select id="link" onchange="location = this.value;">
                    <option></option>
                    <option class="option1" value="../acao.php">A&ccedil;&atilde;o</option>
                    <option class="option2" value="../aventura.php">Aventura</option>
                    <option class="option3" value="../comedia.php">Com&eacute;dia</option>
                    <option class="option4" value="../drama.php">Drama/Trag&eacute;dia</option>
                    <option class="option5" value="../fabula.php">F&aacute;bula</option>
                    <option class="option6" value="../fantasia.php">Fantasia</option>
                    <option class="option7" value="../ficcao.php">Fic&ccedil;&atilde;o</option>
                    <option class="option8" value="../lgbtqia+.php">LGBTQIA+</option>
                    <option class="option9" value="../misterio.php">Mist&eacute;rio</option>
                    <option class="option10" value="../romance.php">Rom&acirc;nce</option>
                    <option class="option11" value="../sobrenatural.php">Sobrenatural</option>
                    <option class="option12" value="../suspense.php">Suspense</option>
                    <option class="option13" value="../terror.php">Terror</option>
                    <option class="option14" value="../horror.php">Horror</option>
                    </select>
                </a></li>
            <li><a href="../favoritos.php">Favoritos</a></li>
            <li><a href="../ja li.php">Ja li</a></li>
            <li><a href="../queroler.php">Quero ler</a></li>
            <li><a href="../perfil.php">Perfil</a></li>
            </ul>
            </nav>
        </header>
        <main>
            <h1 class="titulo">Jogos vorazes</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    Quando Katniss Everdeen, de 16 anos, decide participar dos Jogos Vorazes para poupar a irmã mais nova, causando grande comoção no país, ela sabe que essa pode ser a sua sentença de morte. Mas a jovem usa toda a sua habilidade de caça e sobrevivência ao ar livre para se manter viva. As reviravoltas do jogo e as dificuldades enfrentadas pela protagonista levam os leitores a sofrer junto com ela, enquanto descobrem um pouco sobre seu passado e seu relacionamento com Peeta Mellark, o outro tributo enviado pelo Distrito 12 para lutar nos Jogos Vorazes.


                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="jogosvorazes.jpg">
            </div>
            <button class="button">F</button>
            <button class="button">Q</button>
            <button class="button">j</button>
        </main>
        <footer class="rodape">
                <div>
                            <h3> Siga-nos </h3>
                            <a  href="https://instagram.com/instagram" target="_blank">
                                    <img class="icone" src="../../imag/instagram.png">
                            </a>
                            <a href="https://facebook.com" target="_blank">
                                <img class="icone" src="../../imag/facebook.png">
                            </a>
                            <a href="https://whatsapp.com" target="_blank">
                                <img class="icone" src="../../imag/whatsapp.png.">
                                </a>
                            <a href="https://twitter.com" target="_blank">
                                <img class="icone" src="../../imag/twitter.png">
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
</html>';
?>