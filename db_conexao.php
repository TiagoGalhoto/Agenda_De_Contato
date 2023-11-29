<?php

$servernome = "localhost";
$usernome = "root";
$senha = "";
$dbnome = "agenda_contato";

$db_conexao = mysqli_connect($servernome, $usernome, $senha, $dbnome);

if (!$db_conexao) 
{
    die("! Falha na Conexão " . mysqli_connect_error());
}
echo " Conectado com successo ! ";
