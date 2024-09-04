<?php
require("conexao.php");

class Usuario
{
    public $email;
    public $senha;
    public $nome;
    public $senhaConfirma;
    private $con = null;

    public function __construct($conexao)
    {
        $this->con = $conexao;
    }

    // Função pra validar se já existe um usuário com o mesmo nome ou email no bd
    public function verificaUser()
    {
        $conexao = $this->con->conectar();
        $sql = "SELECT COUNT(*) FROM usuarios WHERE  email = ? OR nome = ?";
        $query = $conexao->prepare($sql);
        $query->execute(array($this->email, $this->nome));
        return $query->fetchColumn() > 0;
    }

    // Função de cadastro
    public function cadastro()
    {
        if ($this->verificaUser()){
            //echo "usuário já existe";
            session_start();
            $_SESSION["msg"] = "Erro: o usuário já existe!";
//            die();
            header("location: ../index.php");
        }else {
            $conexao = $this->con->conectar();
            $sql = "INSERT INTO `usuarios`(`nome`, `email`, `senha`) VALUES (?, ?, ?)";
            $query = $conexao->prepare($sql);
            if ($this->senha == $this->senhaConfirma) {
                $query->execute(array($this->nome, $this->email, $this->senha));

                session_start();
                $_SESSION["msg"] = "Usuário cadastrado com sucesso!";
                header("location: ../index.php");
            }
        }
    }
}

$conexao = new Conexao();
$classe = new Usuario($conexao);
?>
