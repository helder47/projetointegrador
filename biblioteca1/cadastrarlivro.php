<<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, ($_POST['nome']));
$autor = mysqli_real_escape_string($conexao, ($_POST['autor']));
$categoria = mysqli_real_escape_string($conexao, ($_POST['categoria']));
$isbn = mysqli_real_escape_string($conexao, ($_POST['isbn']));
$ano = mysqli_real_escape_string($conexao, ($_POST['ano']));
$quantidade = mysqli_real_escape_string($conexao, ($_POST['quantidade']));
$codedit = mysqli_real_escape_string($conexao, ($_POST['codedit']));


$sql = "UPDATE livro SET Qtd_estoque = Qtd_estoque + '$quantidade' WHERE Nome_livro = '$nome'";

if($conexao->query($sql) === TRUE) {
	$sql = "INSERT INTO livro (Nome_livro, Autor, Categoria, ISBN, Ano, Editora_Cód_editora, Qtd_estoque) VALUES ('$nome', '$autor', '$categoria', '$isbn', '$ano', '$codedit', '$quantidade')";
	$conexao->query($sql);
	$_SESSION['status_cadastro'] = TRUE;
} else {
	$_SESSION['status_cadastro'] = TRUE;
}





$conexao->close();
header('Location: cadastrolivro.php');
exit;

?> 

