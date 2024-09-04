<?php
require("acesso.php");

$usuario = new Usuario($conexao);

$usuario->email = $_POST["emailCad"];
$usuario->nome = $_POST["nomeCad"];
$usuario->senha = $_POST["senhaCad"];
$usuario->senhaConfirma = $_POST["senhaCadConfirma"];
$usuario->cadastro();
?>