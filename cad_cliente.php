<?php
include("conecta.php");

$cliente=$_POST['nomecliente'];
$end=$_POST['endereço'];
$telefone=$_POST['telefone'];
$cpf=$_POST['cpf'];

$query="INSERT INTO cliente values ('','$cliente','$end','$telefone','$cpf',)";

mysqli_query($conexao,$query) or die("Erro de Banco de Dados");

echo  "<script>alert('Cliente Cadastrado com Sucesso');location.href=\"index.html\";</script>";

mysqli_close($conexao);


?>