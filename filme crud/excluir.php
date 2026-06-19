<?php

include "conexao.php";


$id=$_GET['id'];


$stmt=$con->prepare(
"DELETE FROM filmes WHERE id=?"
);


$stmt->bind_param("i",$id);


$stmt->execute();


header("Location:index.php");

?>