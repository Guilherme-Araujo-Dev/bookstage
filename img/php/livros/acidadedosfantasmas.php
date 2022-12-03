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
            <h1 class="titulo"> A cidade dos fantasmas</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    Em A cidade dos fantasmas, uma fantasia young adult de Victoria Schwab, conheça a história de Cassidy Blake. Seus pais são os conhecidos Espectores, uma famosa dupla de caça-fantasmas. No entanto, em segredo, quem realmente consegue ver - e se comunicar - com os espíritos é a própria Cass. Cassidy Blake vive uma rotina simples e tranquila com seus pais no subúrbio. Sua vida é perfeitamente normal - exceto pelo fato de ela conseguir se mover, através do Véu, entre o mundo dos vivos e o do mortos e por ter como melhor amigo Jacob, um fantasma. Quando seus pais são convidados por uma emissora de televisão para apresentar um programa sobre os lugares mais assustadores do mundo, seu cotidiano vira de cabeça para baixo. Em pouco tempo, estão todos - Cassidy, seus pais, seu melhor amigo fantasma e Ceifador, seu gato - em direção à superassombrada Edimburgo, na Escócia, a primeira parada do roteiro do programa... e situações fora do comum começam a acontecer. Na Escócia, Cass se vê cercada, para onde quer que olhe, por fantasmas de todos os tipos, e, é claro, nem todos são gentis e amigáveis. Em meio às incertezas sobre como deve usar seu dom, Cassidy e Jacob se deparam com a Rapina Rubra, um espírito maligno e lendário que surge a cada inverno para assombrar a população local - principalmente as crianças. Cruzando a cidade e passando pelos pontos turísticos mais célebres da região - do cemitério Greyfriars ao bar The White Hart Inn, do Beco de Mary King ao castelo de Edimburgo -, Cassidy e Jacob conhecem a fundo as fábulas, mitos e segredos da cidade, e precisam confrontar a história sangrenta e sobrenatural da capital escocesa. Ainda que em meio a uma empreitada de muitas reviravoltas, os poderes de Cassidy - além de sua bravura e coragem - a levarão a uma batalha épica e, para salvar a si mesma e aos que ama, ela precisará de um impulso e determinação finais, que se estendam tanto pelo enérgico mundo dos vivos quanto pelo sombrio mundo dos mortos. "Essa atmosférica histórica de fantasmas de Schwab arrepia e encanta enquanto desafia os leitores a enfrentar seus medos." - Publishers Weekly
                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="acidadedosfantasmas.jpg">
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