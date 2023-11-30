<?php

include "db_conexao.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $nome = $_POST['nome'];
  $sobre_nome= $_POST['sobre_nome'];
  $t_contato = $_POST['t_contato'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];

 

  $sql = "UPDATE `cadastro_agenda` SET `nome`='$nome',`sobre_nome`='$sobre_nome',`t_contato`='$t_contato',`tel`='$tel',`email`='$email' WHERE id = $id";

  $result = mysqli_query($db_conexao, $sql);

  if ($result) {
    header("Location: index.php?msg=Atualizado com Sucesso !");
  } else {
    echo "Failed: " . mysqli_error($db_conexao);
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
            <h3>Editar Contato</h3>
            <p class="text-muted">Click em atualizar apos aterar qualquer informação.</p>

        </div>

        <?php

        $sql = "SELECT * FROM `cadastro_agenda` where id=$id LIMIT 1";
        $result = mysqli_query($db_conexao, $sql);
        $row = mysqli_fetch_assoc($result);

        ?>


        <div class="container d-flex justify-content-center">
            <!-- formulario !-->
            <form action="" method="post" style="width: 50vw; min-width:300px;">

                <div class="row">

                    <div class="col mb-3">
                        <label class="form-label"> Nome :</label>
                        <input type="nome" class="form-control" name="nome" value="<?php echo $row['nome'] ?>">
                    </div>

                    <div class="col mb-3">
                        <label class="form-label">Sobrenome :</label>
                        <input type="text" class="form-control" name="sobre_nome" value="<?php echo $row['sobre_nome'] ?>">
                    </div>

                    <div class="form-group mb-3">

                        <label>Tipo De Contato :</label>

                        <input type="radio" id="Telefone" name="t_contato" value="Telefone" <?php echo ($row['t_contato'] == 'Telefone') ? "checked" : ""; ?>>
                        <label for="Telefone">Tel. Residencial</label>

                        <input type="radio" id="celular" name="t_contato" value="celular" <?php echo ($row['t_contato'] == 'celular') ? "checked" : ""; ?>>
                        <label placeholder="Ex : celular">Tel. Celular</label>
                    </div>

                    <div class="col mb-3">
                        <label class="form-label"> Telefone :</label>
                        <input type="text" class="form-control" name="tel" value="<?php echo $row['tel'] ?>">
                    </div>

                    <div class="col mb-3">
                        <label class="form-label">E-mail :</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>

                    <!--Botões do formulário !-->

                    <div class="d-grid gap-2 text-center">

                    <button type="submit" class="btn btn-primary" name="submit">Atualizar</button>

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