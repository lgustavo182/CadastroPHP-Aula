<?php
include("conecta.php");

$produto=$_POST['nomeproduto'];
$descricao=$_POST['descricao'];
$valorcompra=$_POST['valorcompra'];
$valorvenda=$_POST['valorvenda'];

$query="INSERT INTO produto values ('','$produto','$descricao','$valorcompra','$valorvenda',)";

mysqli_query($conexao,$query) or die("Erro de Banco de Dados");

echo "<script>alert('Produto Cadastrado com Sucesso');location.href=\"index.html\";</script>";

mysqli_close($conexao);

?>