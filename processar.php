<?php

require_once 'config.php';

//pegando dados dos formulario
$nome = $_POST['name'];
$endereco = $_POST['text'];
$numerocasa = $_POST['number'];
$bairro = $_POST['text'];
$celular = $_POST['tel'];
$servico = $_POST['message'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');


 

$smtp = $conn->prepare("INSERT INTO ordem_de_servico (Nome, Rua, Numero, Bairro, Celular, Servico, Data, Hora) VALUES (?,?,?,?,?,?,?,?)");
//cada variavel significa os ?
$smtp->bind_param("ssisssss",$nome, $endereco, $numerocasa, $bairro, $celular, $servico, $data_atual, $hora_atual);

if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
}else{
    echo "Erro no envio da mensagem:" .$smtp->error;
}

$smtp->close();
$conn->close();

?>