<?php
function conectar()
{
    $host = "localhost";
    $user = "root";
    $senha = "";
    $bd = "mkdg_player";
    try {
        $conexao = new PDO("mysql:host=$host;dbname=$bd", $user, $senha);
        // $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    } catch (PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}
echo "conexao ok";
?>