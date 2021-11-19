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

$sql= "select count(*) as total from livro where nome_livro= '$nome'";
$result= mysqli_query($conexao, $sql);
$row= mysqli_fetch_assoc($result);

if($row == 1) {
	$sql = "UPDATE livro SET Qtd_estoque = '$quantidade' ";
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastrolivro.php');

	exit;

}

$sql = "INSERT INTO livro (Nome_livro, Autor, Categoria, ISBN, Ano, Editora_Cód_editora, Qtd_estoque) VALUES ('$nome', '$autor', '$categoria', '$isbn', '$ano', '$codedit', '$quantidade')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastrolivro.php');
exit;

 ?> 

