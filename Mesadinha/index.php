<?php
header("content-type:text/html;charset=utf-8;");

require_once "classes/Usuarios.php";
$Usuarios = new Usuarios();
if (isset($_POST["entrar"])) {
    $Usuarios->login();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mesadinha</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css"
          href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shourtcut icon" href="img/s.png">
</head>
<body class="fundo">
<div class="main">
    <div class="formlogin">
        <h1 class="text-center"><i class="fa fa-user-circle" aria-hidden="true"></i> Login </h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ex:nome@email.com"
                       required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div>
            <div class="text-center">
                <button class="btn btn-outline-secondary" id="entrar" name="entrar">Entrar <i class="fa fa-check" aria-hidden="true"></i></button>
                <br><br>
                <a href="cadastro.php" class="btn btn-outline-secondary">Registre-se</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
</body>
</html>
