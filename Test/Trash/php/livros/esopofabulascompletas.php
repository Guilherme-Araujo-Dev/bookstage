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
                    Dentro do projeto de publicar clássicos da literatura mundial, a Cosac Naify apresenta mais um material inédito: 383 fábulas atribuídas a Esopo traduzidas diretamente do grego por Maria Celeste C. Dezzotti, professora da Unesp, que propôs uma maneira completamente original de organizar a obra. A tradutora optou por utilizar como fontes a compilação do editor Émilie Chambry – tida como referência – e acrescentar a do também editor Ben Perry, mais atual e completa que a anterior. Com isso, somam-se 26 fábulas ao corpus comumente usado. Outra novidade proposta pela tradutora é a disposição da moral, que vem separada da narrativa para deixar claro o seu caráter de argumentação – e não de conduta ou comportamento, como se convencionou atribuir às fábulas.
        A editora convidou o jovem artista Eduardo Berliner – destaque na 30ª Bienal de São Paulo – para também renovar a interpretação pictórica das fábulas, dispostas nesta edição em ordem alfabética. Ao incorporar a ideia de que os textos trazem animais metaforizando homens, Berliner misturou partes dos corpos de animais e de humanos, em situações tão irônicas e perturbadoras quanto as narradas no texto.
        Em nanquim preto, as inteligentes ilustrações dividem espaço com as fábulas impressas em vermelho, dispostas cada uma em uma página, como se a proposta fosse oferecer ao leitor um texto por dia. Esse conceito é reforçado pelo tamanho do livro, de proporções pequenas e confortáveis para a leitura. Como diz a professora de literatura grega da USP Adriane Duarte, que assina a apresentação do livro: “Os desenhos de Eduardo Berliner são cheios de referências contemporâneas, estimulando os leitores a ver a fábula como algo vivo, que diz respeito ao mundo que habitamos”.
        Assim, a edição de Esopo – fábulas completas revisita as fábulas gregas em uma experiência de leitura completamente nova. É, ao mesmo tempo, uma referência acadêmica e uma ótima porta de entrada para se deliciar com os tão conhecidos animais de Esopo.
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