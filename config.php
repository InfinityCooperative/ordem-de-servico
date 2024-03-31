<?php

//conf de credenciais
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'formulario';

//conec com o banco
$conn = new mysqli('localhost', 'root', '', 'formulario');

//verificar conexao
if($conn->connect_error){
    die("Falha ao se comunicar com o banco de dados:" .$conn->connect_error);
}

?>