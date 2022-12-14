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
            <h1 class="titulo">Esopo fabulas completas</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    Dentro do projeto de publicar cl??ssicos da literatura mundial, a Cosac Naify apresenta mais um material in??dito: 383 f??bulas atribu??das a Esopo traduzidas diretamente do grego por Maria Celeste C. Dezzotti, professora da Unesp, que prop??s uma maneira completamente original de organizar a obra. A tradutora optou por utilizar como fontes a compila????o do editor ??milie Chambry ??? tida como refer??ncia ??? e acrescentar a do tamb??m editor Ben Perry, mais atual e completa que a anterior. Com isso, somam-se 26 f??bulas ao corpus comumente usado. Outra novidade proposta pela tradutora ?? a disposi????o da moral, que vem separada da narrativa para deixar claro o seu car??ter de argumenta????o ??? e n??o de conduta ou comportamento, como se convencionou atribuir ??s f??bulas.
        A editora convidou o jovem artista Eduardo Berliner ??? destaque na 30?? Bienal de S??o Paulo ??? para tamb??m renovar a interpreta????o pict??rica das f??bulas, dispostas nesta edi????o em ordem alfab??tica. Ao incorporar a ideia de que os textos trazem animais metaforizando homens, Berliner misturou partes dos corpos de animais e de humanos, em situa????es t??o ir??nicas e perturbadoras quanto as narradas no texto.
        Em nanquim preto, as inteligentes ilustra????es dividem espa??o com as f??bulas impressas em vermelho, dispostas cada uma em uma p??gina, como se a proposta fosse oferecer ao leitor um texto por dia. Esse conceito ?? refor??ado pelo tamanho do livro, de propor????es pequenas e confort??veis para a leitura. Como diz a professora de literatura grega da USP Adriane Duarte, que assina a apresenta????o do livro: ???Os desenhos de Eduardo Berliner s??o cheios de refer??ncias contempor??neas, estimulando os leitores a ver a f??bula como algo vivo, que diz respeito ao mundo que habitamos???.
        Assim, a edi????o de Esopo ??? f??bulas completas revisita as f??bulas gregas em uma experi??ncia de leitura completamente nova. ??, ao mesmo tempo, uma refer??ncia acad??mica e uma ??tima porta de entrada para se deliciar com os t??o conhecidos animais de Esopo.
                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="esopofabulascompletas.jpg">
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