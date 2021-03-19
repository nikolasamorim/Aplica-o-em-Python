<?php
header("content-type:text/html;charset=utf-8;");
require_once "Classes/Categoria.php";
$categoria = new Categoria();

if (isset($_POST["Salvar"])) {
    $categoria->inserir();
}

$listatodos = $categoria->listartodos();

if (isset($_POST["excluir"])) {
    $categoria->excluir($_POST["excluir"]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>CADASTROS DE CATEGORIAS - Mesadinha</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css"
          href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shourtcut icon" href="img/s.png">
</head>
<body class="option">
<div class="navstyle">

    <ul class="nav ">
        <li class="nav-item ">
            <img src="img/s.png" class="img">
        </li>
        <li class="nav-item">
            <h3 class="titulo nav-link"> Mesadinha </h3>
        </li>
        <li class="nav-item">
            <a class="linkado nav-link" href="home.php">Menu <i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class=" nav-link linkativo " href="cadCategoria.php">Cad. Categoria <i class="fa fa-tasks"
                                                                                      aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class=" linkado nav-link " href="cadContas.php">Cad. Contas <i class="fa fa-address-card"
                                                                              aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class="linkado  nav-link " href="lancamentos.php">Lançamentos <i class="fa fa-line-chart" aria-hidden="true"></i></a>
        </li>

        <li id="sair" class="nav-item">
            <a style="border: none" class=" nav-link btn btn-outline-danger" href="index.php">Sair <i
                        class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>
    </ul>

</div>
<div class="container">
    <div class="grid2">
        <div class="grid-item bla">
            <div class="subtitulo">
                <h3 class="bla"> Cadastro de Categorias <i class="fa fa-tasks" aria-hidden="true"></i></i></h3>
            </div>
            <div class="bagulho">
                <form action="cadCategoria.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" name="Salvar"> Salvar <i class="fa fa-check"
                                                                                         aria-hidden="true"></i>
                        </button>
                    </div>
            </div>
            </form>
        </div>

    <div class="grid-item bla">
        <table class="table table-dark">
            <thead>
            <tr>
                <th>Nome</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($listatodos) :
                foreach ($listatodos as $categoria) : ?>
                    <tr>
                        <td><?php echo $categoria->NOME; ?></td>

                        <td>
                            <button href="#" name="excluir" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                <?php endforeach; ?>
            <?php else : ?>

                <tr>
                    <td colspan="5">Nenhum cadastro efetivado!!!</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>


    </div>


</div>
</div>


</body>
</html>

