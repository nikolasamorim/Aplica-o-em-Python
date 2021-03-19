<?php

require_once "classes/conexao.php";


class Contas
{
    public $codigo;
    public $nome;
    public $tipo;
    public $categoria;

    public function inserir()
    {
        try {
            if (isset($_POST["nome"])) {
                $this->nome = $_POST["nome"];
                $this->tipo = $_POST["tipo"];
                $this->categoria = $_POST["categoria"];

                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("insert into contas(codigo,nome,tipo,categoria)
                                            values (null,?,?,?)");
                $sql->execute(array(
                    $this->nome,
                    $this->tipo,
                    $this->categoria
                ));
                if ($sql->rowCount() > 0) {
                    header("location: cadContas.php");
                }
            } else {
                header("location: cadContas.php");

            }
        } catch (PDOException $msg) {
            echo "Não possível cadastrar a conta!!" . $msg->getMessage();


        }
    }


    public function listartodos()
    {
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from contas");
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $msg) {
            echo " Não foi possível listar a(s) conta(s): " . $msg->getMessage();
        }
    }

    public function excluir($codigo)
    {
        try {
            if (isset($codigo)) {
                $this->codigo = $codigo;
                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("delete from contas where nome = ?");
                $sql->execute(array($this->matricula));

                if ($sql->rowCount() > 0) {
                    header("location:cadContas.php");
                }
            } else {
                header("location:cadContas.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel excluir a conta!!: " . $msg->getMessage();
        }
    }
}