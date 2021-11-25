<<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, ($_POST['nome']));
$quantidade = mysqli_real_escape_string($conexao, ($_POST['quantidade']));
$aluno = mysqli_real_escape_string($conexao, ($_POST['aluno']));



$sql = 	"UPDATE livro SET Qtd_estoque = Qtd_estoque + '$quantidade' WHERE Nome_livro = '$nome'";
/*$name = "SELECT Nome_livro FROM livro"
$UP = "UPDATE livro SET Qtd_estoque = Qtd_estoque + '$quantidade' WHERE Cód_livro = 10 "; */
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = TRUE;
}

$UP = "UPDATE aluno SET Emprestado = Emprestado - '$quantidade' WHERE Nome = '$aluno'";

if($conexao->query($UP) === TRUE) {
	$_SESSION[''] = TRUE;
}






$conexao->close();
header('Location: Devolucao.php');
exit;

?> 
