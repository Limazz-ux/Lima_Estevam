<?php
// Endereço de servidor no banco
$host = "localhost";
// Usuario do banco de dados
$usuario = "root";
// Senha do banco (vazia no xampp)
$senha = "";
// Nome do banco criado
$banco = "lima_estevam";
// Criando conexão com o banco de dados (MySQL)
$conn= mysqli_connect($host,$usuario,$senha,$banco);
//Verificando se a conexão funcionou
if(!$conn) {
    die("Erro ao conectar com o banco de dados");
}
?>