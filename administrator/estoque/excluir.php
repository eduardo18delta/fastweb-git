<?php

include "../content/init.php";

$id = $_GET['id'];

$deletar = $pdo->prepare('DELETE FROM produtos WHERE id_produto = :id');
$deletar->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
if ($deletar->execute()) {
	echo 'Dados removidos com sucesso! <a href="javascript:history.back()">Voltar</a>';
	header('Location: estoque.php');
} else {
	echo 'Error!';	
}



?>
