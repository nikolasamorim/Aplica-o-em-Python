<?php

require_once "classes/conexao.php";


class Cadastro
{
    public $codigo;
    public $nome;
    public $sexo;
    public $email;
    public $endereco;
    public $telefone;
    public $senha;

    public function cadastrar(){
        try {
            if(isset($_POST["email"]) && isset($_POST["senha"])
            && isset($_POST["nome"]) && isset($_POST["sexo"])
            && isset($_POST["endereco"]) && isset($_POST["telefone"])){
                $this->nome = $_POST["nome"];
                $this->sexo = $_POST["sexo"];
                $this->email = $_POST["email"];
                $this->endereco = $_POST["endereco"];
                $this->telefone = $_POST["telefone"];
                $this->senha = $_POST["senha"];

                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("insert into usuario(codigo,endereco,telefone,email,nome,senha)
                                            values (null,?,?,?,?,?)");
                $sql->execute(array(
                    $this->endereco,
                    $this->telefone,
                    $this->email,
                    $this->nome,
                    $this->senha
                ));
                if ($sql->rowCount() > 0) {
                    header("location: index.php");
                }
            } else {
                header("location: index.php");

            }
        } catch (PDOException $msg) {
            echo "Não possível cadastrar o usuario!!" . $msg->getMessage();


        }
    }



}