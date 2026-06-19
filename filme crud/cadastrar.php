<?php

include "conexao.php";


if(isset($_POST['salvar'])){


$stmt = $con->prepare(
"INSERT INTO filmes 
(titulo, diretor, categoria, duracao_minutos, ano_lancamento)
VALUES (?, ?, ?, ?, ?)"
);


$stmt->bind_param(
"sssii",
$_POST['titulo'],
$_POST['diretor'],
$_POST['categoria'],
$_POST['duracao'],
$_POST['ano']
);


if($stmt->execute()){

    header("Location:index.php");

}else{

    echo "Erro: ".$stmt->error;

}


}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Cadastrar Filme</title>

<link rel="stylesheet" href="style.css">

</head>


<body>


<div class="container">


<h1>Cadastrar Filme</h1>


<form method="POST">


<input type="text" 
name="titulo" 
placeholder="Título"
required>


<br><br>


<input type="text" 
name="diretor" 
placeholder="Diretor"
required>


<br><br>


<input type="text" 
name="categoria" 
placeholder="Categoria"
required>


<br><br>


<input type="number" 
name="duracao" 
placeholder="Duração em minutos"
required>


<br><br>


<input type="number" 
name="ano" 
placeholder="Ano de lançamento"
required>


<br><br>


<button name="salvar">

Cadastrar

</button>


</form>


</div>


</body>

</html>