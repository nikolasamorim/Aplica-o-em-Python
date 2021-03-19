<?php
class conexao
{
    private $servidor;
    private $banco;
    private $usuario;
    private $senha;

    function __construct()
    {
        $this->servidor = "localhost";
        $this->banco = "mesadinha";
        $this->usuario = "root";
        $this->senha = "";
    }

    public function conectar()
    {
        try {
            $con = new PDO("mysql:host={$this->servidor};dbname={$this->banco};charset=utf8;", $this->usuario, $this->senha);
            return $con;

        } catch (PDOException $e) {
            echo "Erro ao conectar no banco de dados {$e}";
        }
    }


}



?>