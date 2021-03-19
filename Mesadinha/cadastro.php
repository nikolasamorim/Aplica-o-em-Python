<?php
header("content-type:text/html;charset=utf-8;");

require_once "classes/Cadastro.php";
$Cadastro = new Cadastro();
if (isset($_POST["registrar"])) {
    $Cadastro->cadastrar();
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
        <h1 class="text-center"><i class="fa fa-user-circle" aria-hidden="true"></i> Registre-se</h1>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control" required>
                    <option value="">Escolha uma opção</option>
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Outros</option>
                    <option value="NA">Não Declarar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ex:nome@email.com"
                       required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" class="form-control"
                       placeholder="Ex:Avenida ou Rua, número" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Ex:(00)00000-0000"
                       required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div>
            <div class="text-center">
                    <button class="btn btn-outline-success" id="registrar" name="registrar">Registrar <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <a href="index.php" class="btn btn-outline-danger">Voltar</a>
            </div>
        </form>
    </div>
</div>


</body>
</html>

