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

    <div class="container d-grid gap-2 text-center">
       
        <?php

        if (isset($_GET['msg'])) 
        {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        ' . $msg . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
        ?>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Tipo De Contato</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Opção</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conexao.php";

                $sql = "SELECT*FROM `cadastro_agenda`";
                $result = mysqli_query($db_conexao, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th><?php echo $row['id'] ?></th>
                        <td><?php echo $row['nome'] ?></td>
                        <td><?php echo $row['sobre_nome'] ?></td>
                        <td><?php echo $row['t_contato'] ?></td>
                        <td><?php echo $row['tel'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>

                            <a href="excluir.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>

                    </tr>

                <?php
                }

                ?>

            </tbody>
        </table>

        <div class="container d-flex justify-content-center">

            <div class="row" style="width: 30vw; min-width:300px;">

                <a href="adicionar.php" class="btn btn-primary">Novo Contato</a>

            </div>

        </div>

    </div>

    <!-- Boststrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>