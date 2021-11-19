<<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$contato = mysqli_real_escape_string($conexao, trim($_POST['contato']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

$sql= "select count(*) as total from editora where nome_editora= '$nome'";
$result= mysqli_query($conexao, $sql);
$row= mysqli_fetch_assoc($result);

if($row['total'] ==1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastroeditora.php');
	exit;
}

$sql = "INSERT INTO editora (Nome_editora, Contato, Email) VALUES ('$nome', '$contato', '$email')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
$conexao->close();
header('Location: cadastroeditora.php');
exit;

 ?> 