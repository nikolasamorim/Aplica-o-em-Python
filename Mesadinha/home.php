<?php
header("content-type:text/html;charset=utf-8;");


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menu - Mesadinha</title>
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
            <a class="nav-link linkativo" href="home.php">Menu <i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        <!-- USUARIO LINK
        <li class="nav-item">
            <a class=" linkado nav-link " href="#">Usuários <i class="fa fa-users" aria-hidden="true"></i> </a>
        </li>-->
        <li class="nav-item">
            <a class=" linkado nav-link " href="cadCategoria.php">Cad. Categoria <i class="fa fa-tasks" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class=" linkado nav-link " href="cadContas.php">Cad. Contas <i class="fa fa-address-card" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
            <a class="linkado  nav-link " href="lancamentos.php">Lançamentos <i class="fa fa-line-chart" aria-hidden="true"></i></a>
        </li>

        <li id="sair" class="nav-item">
            <a style="border: none" class=" nav-link btn btn-outline-danger" href="index.php">Sair <i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>

    </ul>

</div>
<div class="container">
    <div class="grid">
        <div class="grid-item bla">
            <div class="borda">
            <div class="subtitulo">
                <h3 class="bla"> Receitas </h3>
            </div>
            <div  id="valor">
                <label style="color: #1c7430" class="numero"> R$ 0.00 </label>
            </div>
            </div>
        </div>

        <div class="grid-item bla">
            <div class="subtitulo">
                <h3 class="bla"> Despesas </h3>
            </div>
            <div id="valor">
                <label style="color: #ff1a1a" class="numero"> R$ 0.00 </label>
            </div>
        </div>

        <div class="grid-item bla">
            <div class="subtitulo">
                <h3 class="bla"> Saldo </h3>
            </div>
            <div id="valor">
                <label  class="numero"> R$ 0.00 </label>
            </div>
        </div>
    </div>
</div>

</body>
</html>

