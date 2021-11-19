<?php
session_start();
include('conexao.php');
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Painel de Acesso</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul>
<li font syle="vertical-align"><a href="cadastrolivro.php">Cadastrar Livro</a></li>
<li font syle="vertical-align"><a href="cadastroeditora.php">Cadastrar Editora</a></li>
<li font syle="vertical-align"><a href="cadastroaluno.php">Cadastrar Aluno</a></li>
<li font syle="vertical-align"><a href="cadastro.php">Cadastrar Usuário</a></li>
<li font syle="vertical-align"><a href="retirada.php">Retirada</a></li>
<li font syle="vertical-align"><a href="devolucao.php">Devolução</a></li>
<li font syle="vertical-align"><a href="editora.php">Verificar Editora</a></li>
<li font syle="vertical-align"><a href="acervo.php">Acervo</a></li>
<li font syle="vertical-align"><a href="estoque.php">Estoque</a></li>
</ul>
</body>
</html>


<h2><a href="logout.php">Sair</a></h2>



