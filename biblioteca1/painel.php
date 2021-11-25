<?php
session_start();
include('conexao.php');
include('verifica_login.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<style>
        body{
            background-image: url('salaleitura2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    

   </style>
<title>Painel de Acesso</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bulma.min.css" />

</head>

<body>
	<div class="">
		<ul>
		<h3></h3>
		<h3></h3>
		<h3></h3>
		<li font style="text-align:center" class="title has-text-black"> Sala de Leitura "EIJI MATSUMURA"</li>
		<li font style="text-align:center" class="title has-text-black">E.E. PEI "KOKI KITAJIMA"</li>
		<li font style="text-align:center" class="title has-text-black">Olá, <?php echo $_SESSION['usuario']; ?></li>
		<li font style="text-align:center">
			<a href="cadastrolivro.php"><button type="submit" class="button is-link">Cadastrar Livro</button></a>
		</li>
		<li font style="text-align:center">
			<a href="cadastroeditora.php"><button type="submit" class="button is-link">Cadastrar Editora</button></a>
		</li>
		<li font style="text-align:center">
			<a href="cadastroaluno.php"><button type="submit" class="button is-link">Cadastrar Aluno</button></a>
		</li>
		<li font style="text-align:center">
			<a href="cadastro.php"><button type="submit" class="button is-link">Cadastrar Usuário</button></a>
		</li>
		<li font style="text-align:center">
			<a href="retirada.php"><button type="submit" class="button is-link">Retirada</button></a>
		</li>
		<li font style="text-align:center">
			<a href="devolucao.php"><button type="submit" class="button is-link">Devolução</button></a>
		</li>
		<li font style="text-align:center">
			<a href="editora.php"><button type="submit" class="button is-link">Verificar Editora</button></a>
		</li>
		<li font style="text-align:center">
			<a href="acerv.php"><button type="submit" class="button is-link">Acervo</button></a>
		</li>
		<li font style="text-align:center">
			<a href="logout.php"><button type="submit" class="button is-danger">SAIR</button></a>
		</li>
		
	</ul>
	</div>
	
</body>

</html>







