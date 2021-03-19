<?php
header("content-type:text/html;charset=utf-8;");
require_once "Classes/Contas.php";
require_once "Classes/Categoria.php";
$Contas = new Contas();
$listaContas = $Contas->listartodos();

if (isset($_POST["Salvar"])) {
    $Contas->inserir();
}

if (isset($_GET["excluir"])){
    $Contas->excluir($_POST["excluir"]);
}
$categoria = new Categoria();
$listacategorias = $categoria->listartodos();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CADASTROS DE CONTAS - Mesadinha</title>
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
            <a class=" linkado  nav-link " href="cadCategoria.php">Cad. Categoria <i class="fa fa-tasks"
                                                                                     aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class=" nav-link linkativo " href="cadContas.php">Cad. Contas <i class="fa fa-address-card"
                                                                                aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class=" linkado  nav-link " href="lancamentos.php">Lançamentos <i class="fa fa-line-chart" aria-hidden="true"></i></a>
        </li>

        <li id="sair" class="nav-item">
            <a style="border: none" class=" nav-link btn btn-outline-danger" href="index.php">Sair <i
                        class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>

    </ul>

</div>
<div class="">
    <div class="grid3">
        <div class="grid-item bla">
            <div class="subtitulo">
                <h3 class="bla"> Cadastro de Contas <i class="fa fa-address-card-o" aria-hidden="true"></i></h3>
            </div>
            <div class="bagulho">
                <form action="cadContas.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>

                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select id="tipo" name="tipo"  class="form-control" required>
                                <option value="">Selecione uma opção</option>
                                <option value="despesa">Despesa</option>
                                <option value="receita">Receita</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" name="categoria"  class="form-control" required>
                                <option value="">Selecione uma opção</option>
                            <?php foreach ($listacategorias as $categoria) { ?>
                                <option value="<?php echo $categoria->NOME; ?>"> <?php echo $categoria->NOME; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" name="Salvar"> Salvar <i class="fa fa-check"
                                                                                             aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="grid-item bla">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Categoria</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($listaContas) :
                    foreach ($listaContas as $conta) : ?>
                        <tr>
                            <td><?php echo $conta->NOME; ?></td>
                            <td><?php echo $conta->TIPO; ?></td>
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

