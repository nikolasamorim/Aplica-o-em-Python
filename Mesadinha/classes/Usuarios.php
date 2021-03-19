<?php

require_once "classes/conexao.php";


class Usuarios
{
    public $codigo;
    public $email;
    public $senha;






    public function login(){
        try {
            if(isset($_POST["email"]) && isset($_POST["senha"])){
                $this->email = $_POST["email"];
                $this->senha = $_POST["senha"];
                $bd = new conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("select * from usuario where email = ? and senha = ?");
                $sql->execute(array($this->email, $this->senha));
                if ($sql->rowCount() > 0){
                    header("location: home.php");
                }else{
                    header("location: index.php");
                }
            }else{
                header("location: index.php");
            }
        }catch(PDOException $msg){
            echo "Não foi possível fazer login. {$msg->getMessage()}";
        }
    }

}



?>