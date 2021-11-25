<<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$turma = mysqli_real_escape_string($conexao, trim($_POST['turma']));
$ra = mysqli_real_escape_string($conexao, trim($_POST['r.a']));

$sql= "select count(*) as total from aluno where nome= '$nome'";
$result= mysqli_query($conexao, $sql);
$row= mysqli_fetch_assoc($result);

if($row['total'] ==1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastroaluno.php');
	exit;
}

$sql = "INSERT INTO aluno (Nome, Telefone, Ano_Serie, RA) VALUES ('$nome', '$telefone', '$turma', '$r.a')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
$conexao->close();
header('Location: cadastroaluno.php');
exit;

 ?> 