<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JQuery - Adicionar a Favoritos</title>
<center><script language="JavaScript">
function addFav(){
var url="favoritos.php";
var title="Bookstage";
if (window.sidebar) window.sidebar.addPanel(title, url,"favoritos.php");
else if(window.opera && window.print){
var mbm = document.createElement('a');
mbm.setAttribute('rel','sidebar');
mbm.setAttribute('href',url);
mbm.setAttribute('title',title);
mbm.click();
}
else if(document.all){window.external.AddFavorite(url, title);}
}
</script>
<a href="javascript:addFav()"><img border="0" alt="Adicione aos Favoritos"
src="http://i47.tinypic.com/257zwc2.jpg"/></a>
<a href="#" onclick="window.external.AddFavorite('endereço do blog','nome do blog');">
<img alt="Adicione aos Favoritos" src="http://i46.tinypic.com/2cijyvb.jpg"
border="0"/> </a></center>
</head>
<body>
   <p><a href="favoritos.php" class="favoritos"><img src="../imag/fovorito.png"></a></p>
</body>
</html>