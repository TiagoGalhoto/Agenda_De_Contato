<?php

include "db_conexao.php";

$id = $_GET['id'];
$sql = "DELETE FROM `cadastro_agenda` WHERE id = $id";
$result = mysqli_query($db_conexao, $sql);
if($result)
{
    header("Location: index.php?msg=Excluido com Sucesso ! ");
}
else
{
    echo "Failed:" . mysqli_error($db_conexao);
}


?>