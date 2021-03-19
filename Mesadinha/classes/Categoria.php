<?php

require_once "classes/conexao.php";


class Categoria
{
    public $codigo;
    public $nome;
    public $usuario_codigo;


    public function listartodos()
    {
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from categoria");
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $msg) {
            echo " Não foi possível listar a(s) categoria(s): " . $msg->getMessage();
        }
    }

    public function excluir($categoria)
    {
        try {
            if (isset($categoria)) {
                $this->categoria = $categoria;
                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("delete from categoria where NOME = ?");
                $sql->execute(array($this->categoria));

                if ($sql->rowCount() > 0) {
                    header("location:cadCategoria.php");
                }
            } else {
                header("location:cadCategoria.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel excluir a(s) categoria(s): " . $msg->getMessage();
        }
    }


    public function inserir()
    {
        try {
            if (isset($_POST["nome"])) {
                $this->nome = $_POST["nome"];
                $this->usuario_codigo = "";

                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("insert into categoria(codigo,nome,usuario_codigo)
                                            values (null,?,?)");
                $sql->execute(array(
                    $this->nome,
                    $this->usuario_codigo
                ));
                if ($sql->rowCount() > 0) {
                    header("location: cadCategoria.php");
                }
            } else {
                header("location: cadCategoria.php");

            }
        } catch (PDOException $msg) {
            echo "Não possível cadastrar a categoria!!" . $msg->getMessage();


        }
    }


}

