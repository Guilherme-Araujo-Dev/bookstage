<?php
echo '<!DOCTYPE html>
<html>
<head>
    <meta name="viewpot" content="width=device-width, inicial-scale=1">
    <meta charset = "UTF-8">
	<title>Bookstage</title>
    <link rel="stylesheet" href="../../css/1.css">
    <link rel="stylesheet" href="../../css/2.css">
    <link rel="stylesheet" href="../../css/3.css">
    <link rel="icon" href="../../imag/logo.jpg">
</head>
<body>
	<header class="cabecalho">
    <a href="../../index.php"><h1 class="logo"></h1></a>
            <button class="bmenu">
                <img src="../../imag/menu.png">
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
            <h1 class="titulo">Fabulas de monteiro lobato</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    Globinho lan??a nova edi????o de F??bulas, de Monteiro Lobato, com novo projeto gr??fico e texto de apresenta????o do escritor Ilan Brenman. Na obra, o autor apresenta hist??rias inspiradas nas f??bulas de Esopo e La Fontaine que trazem li????es ancestrais de intelig??ncia, gratid??o, identidade e autoconhecimento. Com uma narrativa adaptada ?? cultura nacional, Lobato traz para as crian??as das novas gera????es enredos bem-humorados e com reflex??es que estimulam o autoconhecimento. Dona Benta, com um livro no colo, re??ne os netos e se prepara para mais uma tarde de aventuras. Desta vez, ela vai contar sobre mundos nos quais raposas, carneiros, r??s e formigas falam e transmitem aos homens os mais variados ensinamentos. Pedrinho, Narizinho e Em??lia discordam muitas vezes dos conte??dos das f??bulas. Ao exercer, dessa maneira, seu poder de cr??tica, indicam que o leitor pode ele mesmo ser ativo na constru????o da narrativa. Originalmente publicado como F??bulas de Narizinho, o livro logo foi ampliado, devido ao enorme sucesso na ??poca. F??bulas ainda hoje ?? um dos maiores sucessos de seu autor e prova que boas hist??rias n??o envelhecem e ainda rendem muitas horas de divers??o.
                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="fabulasdemonteirolobato.jpg">
            </div>
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