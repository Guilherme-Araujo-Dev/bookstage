<!DOCTYPE html>
<html>
<head>
	<title>Bookstage</title>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="../../CSS/1.css">
    <link rel="stylesheet" href="../../CSS/2.css">
    <link rel="icon" href="../../imag/logo.jpg">
</head>
<body>
	<?php include("../Class/header.php") ?>
            <main>
                <div class="conteudo">
                    Perfil
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
</html>
