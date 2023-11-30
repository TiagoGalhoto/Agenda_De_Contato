<?php

include "db_conexao.php";

if (isset($_POST['salvar'])) 
{
    $nome = $_POST['nome'];
    $sobre_nome = $_POST['sobre_nome'];
    $t_contato = $_POST['t_contato'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `cadastro_agenda`(`id`, `nome`, `sobre_nome`, `t_contato`, `tel`, `email`) VALUES (NULL,'$nome','$sobre_nome','$t_contato','$tel','$email')";

    $result = mysqli_query($db_conexao, $sql);

    if ($result) {
        header("Location:index.php?msg=Adicionado com sucesso ! ");
    } else {
        echo " " . mysqli_error($db_conexao);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonte -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Agenda De Contato</title>
</head>

<body>

    <!-- nav bar Titulo -->
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:LightGray;">
        Agenda De Contato.
    </nav>

    <div class="container">

        <div class="text-center mb-4">
            <h3>Adicione Novo Contato.</h3>
            <p class="text-muted">Preencha formulário abaixo para adicionar novo contato.</p>
        </div>

        <div class="container d-flex justify-content-center">
            <!-- formulario !-->
            <form action="adicionar.php" method="post" style="width: 50vw; min-width:300px;">

                <div class="row">

                    <div class="col mb-3">
                        <label class="form-label"> Nome :</label>
                        <input type="nome" class="form-control" name="nome" placeholder="Ex : Tiago">
                    </div>

                    <div class="col mb-3">
                        <label class="form-label">Sobrenome :</label>
                        <input type="text" class="form-control" name="sobre_nome" placeholder="Ex : Galhoto">
                    </div>

                    <div class="form-group mb-3">

                        <label>Tipo De Contato :</label>

                        <input type="radio" id="Telefone" name="t_contato" value="Tel. Residencial">
                        <label for="Telefone">Tel. Residencial</label>

                        <input type="radio" id="celular" name="t_contato" value="celular">
                        <label placeholder="Ex : celular">Tel. Celular</label>
                    </div>

                    <div class="col mb-3">
                        <label class="form-label"> Telefone :</label>
                        <input type="text" class="form-control" name="tel" placeholder="Ex : 00 0000-0000 ">
                    </div>

                    <div class="col mb-3">
                        <label class="form-label">E-mail :</label>
                        <input type="email" class="form-control" name="email" placeholder="Ex : tiagogalhoto2@gmail.com">
                    </div>

                    <!--Botões do formulário !-->

                    <div class="d-grid gap-2 text-center">
                        <input class="btn btn-primary" type="submit" value="Salvar" name="salvar">
                        <!-- <button type="submit" class="btn btn-primary" name="submit">Salvar</button> -->
                        <a href="index.php" class="btn btn-warning">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Boststrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>