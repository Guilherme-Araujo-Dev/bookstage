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
            <h1 class="titulo">A espada do ver??o</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    A vida de Magnus Chase nunca foi f??cil. Desde a morte da m??e em um acidente misterioso, ele tem vivido nas ruas de Boston, usando de muito jogo de cintura para sobreviver e ficar fora das vistas de policiais e assistentes sociais.
        
        At?? que um dia ele reencontra tio Randolph ??? um homem que ele mal conhece e de quem a m??e o mandara manter dist??ncia. Randolph ?? perigoso, mas revela um segredo improv??vel: Magnus ?? filho de um deus n??rdico.As lendas vikings s??o reais. Os deuses de Asgard est??o se preparando para a guerra. Trolls, gigantes e outros monstros horripilantes est??o se unindo para o Ragnar??k, o Ju??zo Final.
        
        Para impedir o fim do mundo Magnus deve empreender uma importante jornada at?? encontrar uma poderosa arma perdida h?? mais de mil anos.Quando um ataque de gigantes do fogo o for??a a escolher entre a pr??pria seguran??a e a vida de centenas de inocentes, Magnus toma uma decis??o fatal.??s vezes ?? necess??rio morrer para come??ar uma nova vida...Com personagens j?? conhecidos do p??blico, como Annabeth Chase, prima de Magnus, e deuses como Thor e Loki, Rick nos apresenta mais uma aventura surpreendente, repleta de a????o e humor.
        
        A espada do ver??o ?? o primeiro livro de Magnus Chase e os deuses de Asgard, a nova trilogia de Rick Riordan, agora sobre mitologia n??rdica.Rick Riordan ?? um dos principais autores para o p??blico jovem da atualidade. J?? vendeu no Brasil mais de 5 milh??es de exemplares com as s??ries Percy Jackson e os olimpianos, Os her??is do Olimpo e As cr??nicas dos Kane, provando o incr??vel alcance de suas cria????es.???Rick Riordan se tornou o nome da vez na literatura juvenil.???O Globo
                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="aespadadoverao.jpg">
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