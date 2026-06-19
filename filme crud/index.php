<?php

include "conexao.php";

$resultado = $con->query("SELECT * FROM filmes");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Catálogo de Filmes</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>🎬 Catálogo de Filmes</h1>

<a href="cadastrar.php">
+ Novo Filme
</a>

<br><br>

<table>

<thead>

<tr>

<th>Título</th>

<th>Diretor</th>

<th>Categoria</th>

<th>Duração</th>

<th>Ano</th>

<th>Ações</th>

</tr>

</thead>

<tbody>

<?php while($f = $resultado->fetch_assoc()){ ?>

<tr>

<td>
<?= htmlspecialchars($f['titulo']) ?>
</td>

<td>
<?= htmlspecialchars($f['diretor']) ?>
</td>

<td>

<?= htmlspecialchars($f['categoria']) ?>

</td>

<td>
<?= htmlspecialchars($f['duracao_minutos']) ?> minutos
</td>

<td>
<?= htmlspecialchars($f['ano_lancamento']) ?>
</td>

<td>

<a href="editar.php?id=<?= urlencode($f['id']) ?>">
✏ Editar
</a>

<a href="excluir.php?id=<?= urlencode($f['id']) ?>">
🗑 Excluir
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

<br>

<a href="categorias/index.php">
Ver Categorias
</a>

</div>

</body>

</html>