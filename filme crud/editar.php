<?php

include "conexao.php";


$id=$_GET['id'];


$stmt=$con->prepare(
"SELECT * FROM filmes WHERE id=?"
);

$stmt->bind_param("i",$id);

$stmt->execute();

$f=$stmt->get_result()->fetch_assoc();



if(isset($_POST['editar'])){


$stmt=$con->prepare(

"UPDATE filmes SET
titulo=?,
diretor=?,
duracao_minutos=?,
ano_lancamento=?
WHERE id=?"

);


$stmt->bind_param(
"ssiii",
$_POST['titulo'],
$_POST['diretor'],
$_POST['duracao'],
$_POST['ano'],
$id
);


$stmt->execute();


header("Location:index.php");


}

?>


<link rel="stylesheet" href="../style.css">


<div class="container">


<h1>Editar</h1>


<form method="POST">


<input name="titulo"
value="<?=$f['titulo']?>">


<br><br>


<input name="diretor"
value="<?=$f['diretor']?>">


<br><br>


<input name="duracao"
value="<?=$f['duracao_minutos']?>">


<br><br>


<input name="ano"
value="<?=$f['ano_lancamento']?>">


<br><br>


<button name="editar">
Atualizar
</button>


</form>


</div>