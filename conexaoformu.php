<?php

$dblocalhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "formulario-BookStage";

$conexao = new mysqli($dblocalhost, $dbuser, $dbpassword, $dbname);


if($conexao->connect_errno)
{
    echo "erro";
}
else
{
    echo "conexão bem efetuada";
}





?>