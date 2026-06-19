<?php

$con = new mysqli(
"localhost",
"root",
"",
"catalogo_db"
);


if($con->connect_error){

    die("Erro na conexão: ".$con->connect_error);

}

?>