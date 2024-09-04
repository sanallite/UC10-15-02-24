<?php
class Conexao
{
    private $host = "localhost:3307";
    private $user = "root";
    private $senha = "Eternal";
    private $bd = "mkdg_player";
    private $conexao;

    public function conectar()
    {
        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->user, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erro: ' . $e->getMessage());
        }
        
        return $this->conexao;
    }
}
?>