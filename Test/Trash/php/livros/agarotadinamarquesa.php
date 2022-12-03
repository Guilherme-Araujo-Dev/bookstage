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
            <h1 class="titulo">A garota dinamarquesa</h1>
            <br><br>
            <div class="sinopse">
                <p>
                    Um simples favor que a esposa pede ao marido numa tarde fria, enquanto os dois pintam no ateliê. A modelo que vem posando para ela cancelou a sessão ele se importaria de colocar as meias e os sapatos da moça, por alguns instantes, para que ela possa terminar o resto do retrato? “Claro”, diz ele.“ O que você quiser.” Assim começa uma das mais passionais e incomuns histórias de amor do século XX. Inspirado na história real do pintor dinamarquês Einar Wegener e sua esposa californiana, este delicado retrato de um casamento nos desafia a refletir o que fazer quando alguém que amamos quer mudar. Einar passa a se vestir cada vez mais como Lili – uma espécie de alter ego feminino –, por quem Greta se vê estranhamente atraída, e à medida que Einar desaparece na lembrança, eles percebem que uma escolha terá de ser feita: Lili ou Einar. Tendo como pano de fundo o glamour e a decadência da Europa da década de 1920, A garota dinamarquesa retrata a quase esquecida história de amor entre um homem que descobre sua verdadeira sexualidade e uma mulher disposta a sacrificar tudo por ele. Romance de estreia de David Ebershoff, A garota dinamarquesa ganhou o Prêmio Literário Lambda de 2000 na categoria de ficção transgênero, e foi transformado em um grande filme estrelado pelo já vencedor do Oscar, Eddie Redmayne.
                </p>
            </div>
            <div id="imagem" class="borda">
            <img src="agarotadinamarquesa.jpg">
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