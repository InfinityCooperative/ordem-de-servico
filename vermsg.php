<?php

require_once 'config.php';

$senha = "074708";


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhadigitada = $_POST['SENHA'];

    if($senhadigitada === $senha){
$sql = "SELECT *  FROM ordem_de_servico";
$result = $conn->query($sql);
    }else{
        echo "<h1>Senha incorreta!</h1>";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <title>Ver ordens</title>
    <link rel="stylesheet" href="cascata.css">
</head>
<body> 
    <img src="imagens/brasil.png" class="brasil"><br><br>
    <img src="imagens/ospt.png" class="logo">
        <form method="post">
        <h3>Formulario de envio</h3>
        <Label for="senha">Senha:</Label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <button type="submit">Enviar</button>
    </form>

    <div class="ordens">
<?php if(isset($result) && $result->num_rows >0) : ?>
<h2 style="text-align:center">Orden de serivço</h2>
<ul>
<?php while($row = $result->fetch_assoc()) :?>
    <li>
        <strong>Nome:</strong> <?php echo $row["Nome"]; ?><br><br>
        <strong>Endereço:</strong> <?php echo $row["Rua"]; ?><br><br>
        <strong>numero:</strong> <?php echo $row["Numero"]; ?><br><br>
        <strong>Bairro:</strong> <?php echo $row["Bairro"]; ?><br><br>
        <strong>Celular:</strong> <?php echo $row["Celular"]; ?><br><br>
        <strong>Serviço:</strong> <?php echo $row["Servico"]; ?><br><br>
        <strong>Data e Hora:</strong> <?php echo $row["Data"]. " às ".$row["hora"]; ?><br><br>
    </li>
    <?php endwhile; ?>
</ul>
<?php else : ?>
    <P>Nenhuma ordem de serviço  encontrada</p>
   <?php endif; ?>
    </div>

   <a href="https://infinitycooperative.github.io/Alem_de_um_status/"><img src="imagens/infinity icon.png" class="infinity"></a>
</body>
</html>