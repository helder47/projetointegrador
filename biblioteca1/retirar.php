<<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, ($_POST['nome']));
$autor = mysqli_real_escape_string($conexao, ($_POST['nome']));
$quantidade = mysqli_real_escape_string($conexao, ($_POST['quantidade']));
$aluno = mysqli_real_escape_string($conexao, ($_POST['aluno']));



$sql = "UPDATE aluno SET Emprestado = Emprestado + '$quantidade' WHERE Nome = '$aluno'";

/*$name = "SELECT Nome_livro FROM livro"
$UP = "UPDATE livro SET Qtd_estoque = Qtd_estoque + '$quantidade' WHERE Cód_livro = 10 "; */
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = TRUE;
	$UP = "UPDATE livro SET Qtd_estoque = Qtd_estoque - '$quantidade' WHERE Nome_livro = '$nome'";
	$conexao->query($UP);
} else {
	$_SESSION['status_cadastro'] = TRUE;
}

$conexao->close();
header('Location: retirada.php');
exit;

?> 
