<?php

require_once "classes/conexao.php";


class Lançamentos
{
public $codigo;
public $valor;
public $contas;

    public function inserir()
    {
        try {
            if (isset($_POST["valor"])) {
                $this->valor = $_POST["valor"];
                $this->contas = $_POST["contas"];

                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("insert into lançamento(codigo,valor,contas)
                                            values (null,?,?)");
                $sql->execute(array(
                    $this->valor,
                    $this->contas
                ));
                if ($sql->rowCount() > 0) {
                    header("location: lancamentos.php");
                }
            } else {
                header("location: lancamentos.php");

            }
        } catch (PDOException $msg) {
            echo "Não possível fazer o lançamento!!" . $msg->getMessage();


        }
    }

    public function excluir($codigo)
    {
        try {
            if (isset($codigo)) {
                $this->codigo = $codigo;
                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("delete from lancamento where valor = ?");
                $sql->execute(array($this->matricula));

                if ($sql->rowCount() > 0) {
                    header("location:lancamento.php");
                }
            } else {
                header("location: lancamento.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel excluir o lançamento!!: " . $msg->getMessage();
        }
    }


    public function listartodos()
    {
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from lancamento");
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $msg) {
            echo " Não foi possível listar a(s) categoria(s): " . $msg->getMessage();
        }
    }
}