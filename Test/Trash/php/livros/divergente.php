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
            <h1 class="titulo">Divergente</h1>
            <br><br>
            <div class="sinopse">
                <p>
                     Na futur??stica cidade de Chicago, ao completar 16 anos,
                    <br>Beatrice precisa escolher entre as diferentes fac????es em que a 
                    <br> cidade est?? dividida. Cada uma representa um valor diferente
                    <br>e, ao contr??rio de sua fam??lia, a jovem opta pela fac????o dos destemidos, a Aud??cia. Ela ent??o se torna Tris e inicia uma jornada para afastar seus medos e descobrir quem realmente ??. Durante essa jornada, acaba conhecendo o jovem Quatro, um rapaz experiente que tem o dom de intrig??-la e de encant??-la ao mesmo tempo.
                </p>
            </div>
            <div id="imagem" class="borda">
                <figure>
                <img src="divergente.jpg">
                </figure>
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